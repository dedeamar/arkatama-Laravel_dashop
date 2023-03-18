const form = document.querySelector('form');

form.addEventListener('submit',function(event) {
  event.preventDefault();
  const newTodo = document.querySelector('input[name=newTodo]').value;
  addTodo(newTodo);
});
function addTodo(newTodo) {
    //membuat element li
    const li = document.createElement('li');
    li.textContent = newTodo;
    console.log(li);
    //membuat element button hapus
    const deleteButton = document.createElement('button');
    deleteButton.textContent = 'X';
    deleteButton.addEventListener('click',function(){
      deleteTodo(this);
    });

      
  li.appendChild(deleteButton);
  //append ke ul
  const ul = document.querySelector('ul');
  ul.appendChild(li);
  
  // console.log(ul);
}

function deleteTodo(todo) {
  const li = todo.parentNode
  li.remove();
}


