$(document).ready(function () {
    $("#agency-checkbox").click(function () {
        let check = $("#agency-checkbox").is(":checked");
        $('.agency-checked').not(this).prop('checked', check);
    })
    $(".agency-checked").click(function () {
        let check = $(this).is(":checked");
        let checkAll = $("#agency-checkbox").is(":checked");

        if (check === false && checkAll === true) {
            $('#agency-checkbox').prop("checked", false)
        }
    })
    $("#agency-delete").click(function () {
        let checkbox = $(".agency-checked")
        let deleteId = []
        for (let i = 0; i < checkbox.length; i++) {
            if (checkbox[i].checked) {
                deleteId.push(checkbox[i].value)
            }
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: origin + '/agencies/delete',
            method: 'POST',
            data: {
                deleteId: deleteId
            },
            success: function (res) {
                if (res.status === 'success') {
                    for (let i = 0; i < deleteId.length; i++) {
                        $('#agency-item' + deleteId[i]).remove();
                    }                }
            },
            error: function (error) {

            }
        })

    });
})
