const nodemailer = require("nodemailer")

let transporter = nodemailer.createTransport({
    host: "smtp.gmail.com",
    port: 587,
    secure: true,
    auth: {
        user: "agendsus.saude@gmail.com",
        pass: "agendsus2022"
    }
});

transporter.sendMail({
    from: "AgendSUS <agendsus.saude@gmail.com>",
    to: " ",
    subject: "Cadastro para notificação por email",
    html: "Seu email foi cadastrado para receber notificações de novidades sobre a campanha de vacinaçaõ na cidade de Fortaleza, agora você ficará sabendo de tudo sobre a campanha.",
}).then(message => {
    console.log(message);
}).catch(err => {
    console.log(err);
})