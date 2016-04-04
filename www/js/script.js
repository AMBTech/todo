function addNewItem(list, title, description) {

    var Title = document.createElement("li");
    var Description = document.createElement("li");

    Title.innerText = title.value;
    Description.innerText = description.value;

    
    list.appendChild(Title, Description);

}

var newItem = document.getElementById("addTask");
newItem.onclick = function(){

    var title = document.getElementById('title');
    var description = document.getElementById('description');

    if(!title || !description)
    {
        return false;
    }

   addNewItem(document.getElementById("tasks"), title, description);
};