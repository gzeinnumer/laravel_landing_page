<div class="modal fade" id="modal-add">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">

        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<script>
    function searchUser() {
        var user_value = document.getElementById('user_value').value;
        // alert(user_value);
        if (user_value.length > 0) {
            $.ajax({
                url: '/dashboardv2/user/searchuser?user_value=' + user_value,
                type: 'get',
                dataType: 'JSON',
                success: function(data) {
                    // console.log(data);
                    var x = document.getElementById('id_user');
                    x.innerHTML = '';
                    var optionDisable = document.createElement('option');
                    optionDisable.text = 'Select User';
                    optionDisable.disabled = true;
                    optionDisable.selected = true;
                    x.add(optionDisable);

                    for (let i = 0; i < data.length; i++) {
                        const element = data[i];
                        var option = document.createElement('option');
                        option.text = element.nama_lengkap;
                        option.value = element.id;
                        x.add(option);

                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {

                }
            });
        } else {

        }
    }
</script>