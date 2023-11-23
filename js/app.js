const modal = document.querySelector(".fundoModalForm");


function closeModal() {
    modal.style.display = "none";
}

window.onload = () => {
    setTimeout(() => {
        modal.style.display = "flex";
    }, 5000);
}