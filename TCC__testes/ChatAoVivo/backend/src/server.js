const { WebSocketServer } = require("ws") /*importando uma classe da bibloteca ws*/
const dotenv = require("dotenv")

dotenv.config();

const wss = new WebSocketServer({ port: process.env.PORT || 8080}); /*wss de WebScoketServer, passando um obejeto com a chave porta com um valor fixo*/

/*Evento de conexão*/
    wss.on("connection", (ws) => {
        ws.on("error", console.error) /*se ouver algum erro, vai ser executado um console mosstrando uma mensagem de erro*/

        

        ws.on("message", (data) => {  /*essa função sempre vai ser desparada quando alguem mandar alguma mensagem no sevidor*/
            wss.clients.forEach((client) => client.send(data.toString())) /*pega todos os clientes e envia mensagem que foi mandada no sevidor para todso os clientes*/
        })

        console.log("client connected")
    })
/*Fim do evento de conexão*/
