if (document.location.search === "?mail_status=sent") {
    msgStatus.classList.add("success");
    msgStatus.textContent = "Message Sent :)";
  
    setTimeout(() => {
      msgStatus.classList.remove("success");
    }, 3000);
  }
  if (document.location.search === "?mail_status=error") {
    msgStatus.classList.add("error");
    msgStatus.textContent = "Message not sent!";
  
    setTimeout(() => {
      msgStatus.classList.remove("error");
    }, 3000);
  }
  