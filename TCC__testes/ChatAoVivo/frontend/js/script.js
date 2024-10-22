// login elementos
const login = document.querySelector(".login")
const loginForm = login.querySelector(".login__from")
const loginInput = login.querySelector(".login__input")

// chat elementos
const chat = document.querySelector(".chat")
const chatForm = chat.querySelector(".chat__form")
const chatInput = chat.querySelector(".chat__input")
const chatMessages = chat.querySelector(".chat__messagens") 


const colors = [
    "cadetblue",
    "darkgoldenrod",
    "cornflowerblue",
    "darkkhaki",
    "hotpink",
    "gold"
]

const user = { id: "", name: "", color: "" }

let websocket

const createMessagenSelfElement = (content) => {
    const div = document.createElement("div")

    div.classList.add("messagens__self")
    div.innerHTML = content

    return div
}

const createMessagensOtherElement = (content, sender, senderColor) => {
    const div = document.createElement("div")
    const span = document.createElement("span")

    div.classList.add("messagens__other")

    div.classList.add("messagens__self")
    span.classList.add("messagens__sender")
    span.style.color = senderColor

    div.appendChild(span) //span filho da div

    span.innerHTML = sender
    div.innerHTML += content //+= vai agregar tudo o que tem dentro do HTML da div mais o conteudo da mensagem

    return div
}

const getRandowColor = () =>{
    const randowIndex = Math.floor(Math.random() * colors.length)
    return colors[randowIndex]
}

const scrollScreen = () =>{
    window.scrollTo({
        top: document.body.scrollHeight,
        behavior: "smooth"
    })
}

const processMessage = ({ data }) => {
    const { userId, userName, userColor, content } = (JSON.parse(data)) // converter de volta para um objeto

    const message = userId == user.id 
    ? createMessagenSelfElement(content) 
    : createMessagensOtherElement(content, userName, userColor)


    chatMessages.appendChild(message)

    scrollScreen()
}

const handleLogin = (event) => {
    event.preventDefault()

    user.id = crypto.randomUUID() // gerando um id para o usuário unico
    user.name = loginInput.value
    user.color = getRandowColor()

    login.style.display = "none" //escondendo o form
    chat.style.display = "flex" // aparecendo o chat

    websocket = new WebSocket("ws://localhost:8080") //criando conexão com o sevidor
    websocket.onmessage = processMessage // sevidor mandado uma mensagem para o ususario
}

const sendMessage = (event) => {
    event.preventDefault()

    const message = {
        userId: user.id,
        userName: user.name,
        userColor: user.color,
        content: chatInput.value
    }

    websocket.send(JSON.stringify(message))

    chatInput.value = ""
}

loginForm.addEventListener("submit", handleLogin)
chatForm.addEventListener("submit", sendMessage)

