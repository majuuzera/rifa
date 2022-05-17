$(document).ready(function() {
    $('.btn-save').click(function(e) {
        e.preventDefault()

        let dados = $('#form-tipo').serialize()

        dados += `&operacao=${$('.btn-save').attr('data-operation')}`

        $.ajax({
            type: 'POST',
            dataType: 'json',
            assync: true,
            data: dados,
            url: 'src/tipo/modelo/save-tipo.php',
            success: function(dados) {
                Swal.fire({
                    title: 'e-rifa',
                    text: dados.mensagem,
                    icons: dados.tipo,
                    confirmButtonText: 'OK'
                })
                $('.#modal-tipo').modal('hide')
                $('.#table-tipo').dataTable().ajax.reload()
            }
        })
    })
})