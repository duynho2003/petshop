function actionDelete(event){
    event.preventDefault();
    let urlRequest = $(this).data('url');
    let that = $(this);
    Swal.fire({
        title: 'Are you sure?',
        text: "You won't be able to revert this!",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: 'get',
                url: urlRequest,
                success: function (data) {
                    let json = JSON.parse(data)
                    if(json.code == 200) {
                        that.parent().parent().remove();
                    }
                    Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )
                },
                error: function () {
                    
                }
            });
        }
    })
}


$(function () {
    $(".active_delete").click(actionDelete);
})