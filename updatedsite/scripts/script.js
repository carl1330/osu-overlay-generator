player1 = "Player 1";
player2 = "Player 2";

function savePlayerNames(name1, name2)
{
    player1 = name1;
    player2 = name2;
}

function createBeatmapBox(mod, amount, id)
{
  var box = document.createElement("div");
  var wrapper = document.createElement("div");
  var beatmapInput = document.createElement("input");
  var beatmapAmount = document.createElement("input");
  var br = document.createElement("br");

  wrapper.className = "wrapper";
  wrapper.id = "wrapper" + mod + (id +  1);

  beatmapInput.id = "BeatmapInput" + mod + (id + 1);
  beatmapInput.className = "beatmapid";
  beatmapInput.setAttribute("name", mod + (id + 1));

  beatmapAmount.setAttribute("name", "Amount" + mod);
  beatmapAmount.style.opacity = "0";
  beatmapAmount.style.visibility = "none";
  beatmapAmount.style.pointerEvents = "none";
  beatmapAmount.style.cursor = "cursor";
  beatmapAmount.setAttribute("value", amount);
  beatmapAmount.setAttribute("tabindex", -1);

  box.className = "beatmapbox";
  box.style.backgroundColor = "grey";
  box.innerHTML = "Beatmap ID:";
  box.id = mod + (id + 1);
  document.getElementById(mod + "Maps").appendChild(wrapper);
  wrapper.appendChild(box);
  box.appendChild(br);
  box.appendChild(beatmapInput);
  box.appendChild(beatmapAmount);
}

function createMapControls(amount, mod)
{
  for (var i = 1; i <= amount; i++)
  {
    var mapControlsList = document.createElement("ul");
    document.getElementById(mod + "Controls").appendChild(mapControlsList);
    var mapControlsItem = document.createElement("li");
    mapControlsItem.innerHTML = mod + i + ": ";
    mapControlsList.appendChild(mapControlsItem);
    for(var j = 0; j < 4; j++)
    {
      var mapControlsItem = document.createElement("li");
      var mapControlsInput = document.createElement("INPUT");
      mapControlsItem.style.marginLeft = "50px";
      mapControlsInput.setAttribute("type", "radio");
      mapControlsInput.className = "controls";
      switch(j)
      {
        case 0:
          mapControlsItem.innerHTML = "Open";
          mapControlsInput.id = mod + i + "Open";
          mapControlsInput.setAttribute("onclick", "seeIfChecked('"+ mod + i +"Open')");
          mapControlsInput.setAttribute("checked", "checked");
          break;
        case 1:
          mapControlsItem.innerHTML = "Banned";
          mapControlsInput.id = mod + i + "BannedInput";
          mapControlsInput.setAttribute("onclick", "seeIfChecked('"+ mod + i +"BannedInput')");
          break;
        case 2:
          mapControlsItem.innerHTML = "Won by P1";
          mapControlsInput.id = mod + i + "PickedP1Input";
          mapControlsInput.setAttribute("onclick", "seeIfChecked('"+ mod + i +"PickedP1Input')");
          break;
        case 3:
          mapControlsItem.innerHTML = "Won by P2";
          mapControlsInput.id = mod + i + "PickedP2Input";
          mapControlsInput.setAttribute("onclick", "seeIfChecked('"+ mod + i +"PickedP2Input')");
          break;
      }
      mapControlsInput.name = "Controls" + mod + i;
      mapControlsList.appendChild(mapControlsItem);
      mapControlsItem.appendChild(mapControlsInput);
    }
  }
  document.getElementById("NM1Open").addEventListener("click", seeIfChecked("NM1Open"));
}

function seeIfChecked(id)
{
  if(document.getElementById(id).checked)
  {
    var open = "Open";
    var ban = "Banned";
    var picked = "Picked";
    var beatmapId = id.substring(0, 3);
    if(id.includes(ban))
    {
      banBeatmap(beatmapId);
    }
    else if(id.includes(picked))
    {
      var player = id.substring(3, 11);
      pickBeatmap(beatmapId, player);
    }
    else if(id.includes(open))
    {
      openBeatmap(beatmapId);
    }
  }
}



function openBeatmap(id)
{
  if(document.getElementById(id + "Picked"))
  {
    document.getElementById(id + "Picked").remove();
  }
  if(document.getElementById(id + "Banned"))
  {
    document.getElementById(id + "Banned").remove();
  }
}


function banBeatmap(id)
{
  console.log(id);
  if(document.getElementById(id + "Picked"))
  {
    document.getElementById(id + "Picked").remove();
  }
  var banBox = document.createElement("div");
  banBox.className = "beatmapBanned";
  banBox.id = id + "Banned";
  banBox.innerHTML = "Banned";
  beatmapBox = document.getElementById("wrapper" + id);
  beatmapBox.insertBefore(banBox, beatmapBox.childNodes[0]);
  setTimeout(function(){
    banBox.style.opacity = 1;

  }, 200);
}

function pickBeatmap(id, player)
{
  if(document.getElementById(id + "Banned"))
  {
    document.getElementById(id + "Banned").remove();
  }
  if(document.getElementById(id + "Picked"))
  {
    document.getElementById(id + "Picked").remove();
  }
  var pickBox = document.createElement("div");
  pickBox.id = id + "Picked";
  if(player == "PickedP1")
  {
    pickBox.innerHTML = "Won by " + player1;
    pickBox.className = "beatmapPicked";
  }
  else if(player == "PickedP2")
  {
    pickBox.innerHTML = "Won by " + player2;
    pickBox.className = "beatmapPicked2";
  }

  beatmapBox = document.getElementById("wrapper" + id);
  beatmapBox.insertBefore(pickBox, beatmapBox.childNodes[0]);
  setTimeout(function(){
    pickBox.style.opacity = 1;
  }, 200);
}

function createBeatmapBoxOverlay(title, artist, background, mod, id)
{
  var box = document.createElement("div");
  var wrapper = document.createElement("div");

  wrapper.className = "wrapper";
  wrapper.id = "wrapper" + mod + (id +  1);

  box.className = "beatmapbox ";
  box.style.background = "linear-gradient(to bottom, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0) 59%, rgba(0, 0, 0, 0.65) 100%),url("+ background +")";
  box.style.backgroundSize = "cover";
  box.style.backgroundPosition = "center";
  box.id = mod + (id + 1);
  box.innerHTML = title + " - " + artist;
  box.setAttribute("onclick", "banBeatmap('" + mod + (id + 1) + "')");
  document.getElementById(mod).appendChild(wrapper);
  wrapper.appendChild(box);

}
