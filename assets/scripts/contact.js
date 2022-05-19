const sendButton = $(".send-button");

$(".send-button").on("click", (e) => {
  e.preventDefault();
  let name = $("#name").val();
  let email = $("#email").val() !== "" ? $("#email").val() : "Não Preenchido";
  let subject = $("#subject").val() === "duvidas" ? "Dúvida" : "Orçamento";
  let message = $("#message").val();

  let fullMessage = `Olá, me chamo ${name} - E-mail: ${email} - Assunto: ${subject}. ${message}`;
  let fullMessageEncoded = encodeURIComponent(fullMessage);

  let whatsapp = "5516981017203";
  let link = `https://api.whatsapp.com/send?phone=${whatsapp}&text=${fullMessageEncoded}`;

  window.open(link, "_blank");

  $("#name").val("");
  $("#email").val("");
  $("#subject").val("");
  $("#message").val("");
});
