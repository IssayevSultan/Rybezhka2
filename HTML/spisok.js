const input = document.querySelector('#input');
const btn = document.querySelector('#btn');
const deli = document.querySelector('#deli');

btn.addEventListener('click', (e) =>{
    if (input.value ==='') return
    createDeleteElements(input.value)
    input.value = ''
})

function createDeleteElements(value){
    const li = document.createElement('li');
    var span = document.createElement('span');

    li.textContent = value;
    deli.appendChild(li);
}

deli.addEventListener('dblclick', function(evt) { 
    var del = confirm("Вы уверенны что хотите удалить? Выполнили свое дело?");
    if (del==true){
        deli.removeChild(evt.target);     
        alert("Удалено!")
    }
    else {
        alert("Фух чуть не удалили да? :)")
    }
    return del;
    
},
false);