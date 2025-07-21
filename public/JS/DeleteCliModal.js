document.addEventListener("DOMContentLoaded", () => {
  const modal = document.getElementById("modal-confirmacao");
  const linkConfirmar = document.getElementById("confirmarExclusao");
  const fechaModal = document.getElementById("cancelarModal");

  fechaModal.addEventListener("click", () => {
    modal.classList.add("hidden");
  });

  const botoesExcluir = document.querySelectorAll('[name="btn-excluir"]');
  botoesExcluir.forEach(botao => {
    botao.addEventListener("click", (event) => {
      event.preventDefault();
      const idClient = botao.dataset.id;
      linkConfirmar.href = `delete-client?id_client=${idClient}`;
      modal.classList.remove("hidden");
    });
  });
});
