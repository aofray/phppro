


async function send(url = '', data = {}, method="POST") {
    // Default options are marked with *

    let params = {
        method: method, // *GET, POST, PUT, DELETE, etc.
        mode: 'cors', // no-cors, *cors, same-origin
        cache: 'no-cache', // *default, no-cache, reload, force-cache, only-if-cached
        credentials: 'include', // include, *same-origin, omit
        headers: {
            'X-Requested-With':'XMLHttpRequest',
            // 'Content-Type': 'application/json'
            // 'Content-Type': 'multipart/form-data'
            // 'Content-Type': 'application/x-www-form-urlencoded',
        },
        redirect: 'follow', // manual, *follow, error
        referrerPolicy: 'no-referrer', // no-referrer, *client
        // body:  data// body data type must match "Content-Type" header
    }
    console.log(method)
    if ( method.toUpperCase() !== "GET") {
        params["body"] = data
    }


    const response = await fetch(url, params);
    return await response.json(); // parses JSON response into native JavaScript objects
}


function SendForm (event){
    event.preventDefault()
    event.stopPropagation()

    let form = event.target

    const Data =new FormData(form);

    let action = form.getAttribute("action")
    let method = form.getAttribute("method")
    let url = 'https://127.0.0.1:8000/'+action
    if (method === "get") {
        const asString = new URLSearchParams(Data).toString();
        url = url+"?"+asString
    }

    console.log(method);
    console.log(url)

    send(url, Data, method).then((data) => {
            // JSON data parsed by `response.json()` call
            console.log(data); // JSON data parsed by `response.json()` call
            console.log(data.hasOwnProperty("errors")); // JSON data parsed by `response.json()` call
        if (data.hasOwnProperty("errors")){
            ShowFLoatMessage(data["errors"]);
        } else {
            UpdateContent(data["content"])
        }
        });
}

function logout(){
    send('https://127.0.0.1:8000/logout').then((data) => {
        console.log(data); // JSON data parsed by `response.json()` call
        console.log(data.hasOwnProperty("errors")); // JSON data parsed by
    });
}

function UpdateContent(contents){
    for (content of contents){
        // console.log(content)
        const dataTarget = document.getElementById(content.target)
        console.log(dataTarget)
        switch (content.method){
            case "replace":
                console.log(content.method)
                dataTarget.innerHTML = content.html
                break;
            case "append":
                console.log(content.method)
                dataTarget.insertAdjacentHTML("beforeend", content.html)
                break;
            case "prepend":
                console.log(content.method)
                dataTarget.insertAdjacentHTML("afterbegin", content.html)
                break;
            case "remove":
                console.log(content.method)
                dataTarget.remove()
                break;
             case "setAttribute":
                 for (key in content["attributs"]){
                     dataTarget.setAttribute(key, content["attributs"][key])
                 }
                break;
        }
    }
}

function ShowFLoatMessage(errors){
    for (error of errors){
        document.getElementById(error.target).insertAdjacentHTML("beforeend", error.html)

    }
}


function close(event){
    console.log(event)
    event.preventDefault()
    event.stopPropagation()
    console.log(event)
    console.log(document.getElementById(id))
    document.getElementById(id).remove()
    setTimeout(
        function (){
            document.getElementById(id).remove()
        }, 200
    )
}

function ListenScroll(){
   let ScrolEllements = document.getElementsByClassName('scroll')

   for (let El of ScrolEllements) {
       El.addEventListener('scroll', function() {
           let p = El.querySelector('.paginator')
           let Elcoords = El.getBoundingClientRect();
           let coords = p.getBoundingClientRect();
           if (coords.top <= Elcoords.bottom+150) {
               if (!p.classList.contains('load')) {
                   console.log(p)
                   p.form.dispatchEvent  (new  Event ('submit', {cancelable: true}))
                   p.classList.add('load')
               }

           } else {
               if (p.classList.contains('load')) {
                   p.classList.remove('load')
               }
           }
           // document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
       });
   }

}



// let coords = elem.getBoundingClientRect();
//
// let windowHeight = document.documentElement.clientHeight;
//
// // верхний край элемента виден?
// let topVisible = coords.top > 0 && coords.top < windowHeight;
//
// // нижний край элемента виден?
// let bottomVisible = coords.bottom < windowHeight && coords.bottom > 0;


window.addEventListener('scroll', function() {
    document.getElementById('showScroll').innerHTML = pageYOffset + 'px';
});