<?php require_once('dash-header.php') ?>
<div class="container-fluid">
    <?php include_once 'dash-menu.php';?> 
        <div class="col-10 mt-5">
            <div class="container">
                <div class="row p-0 m-0">
                    <?php include_once 'dash-logo.php'; ?>
                    <div class="col-12 p-0 mt-5">
                        <div class="row m-0">

                            <div class="col-12 p-0 mb-5">
                                <h4>USUARIOS DASHBOARD</h4>
                            </div>

                            <div class="col-12 p-0">
                                <table id="table-users" class="table">
                                    <thead>
                                        <tr class="bg-primary">
                                            <th class="text-white text-center">No.</th>
                                            <th class="text-white">Usuario</th>
                                            <th class="text-white">Email</th>
                                            <th class="text-white">Rol</th>
                                            <th class="text-white">Ultima sesión</th>
                                            <th class="text-white">Control</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $res = $sql -> ConsultaBD( " SELECT * FROM users " );
                                        $i = 1;
                                        while($row = mysqli_fetch_array($res))
                                        {
                                            echo '<tr class="dash-users-row">'.
                                                    '<td class="text-center">'. $i .'</td>'.
                                                    '<td>'. $row[1] .'</td>'.
                                                    '<td>'. $row[2] .'</td>'.
                                                    '<td>'. $row[3] .'</td>'.
                                                    '<td>'. date('d-m-y') .'</td>'.
                                                    '<td>'.
                                                        '<i class="fas fa-pencil-alt dash-edit"></i>'.
                                                        '<i class="far fa-trash-alt dash-delete"></i>'.
                                                    '</td>'.
                                                '</tr>';
                                            $i++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div> 

<script>
class UsersTable{
    constructor( table ){
        this.table = table;
    }
    GetEdits(){
       let define_edits = this.table.querySelectorAll('.dash-edit');
       return define_edits;
    }
    GetDels(){
        let define_deletes = this.table.querySelectorAll('.dash-delete');
        return define_deletes;
    }
    SetListDels(){
        let dels = this.GetDels();
        for (var i = 0; i < dels.length; i++) {
            dels[i].addEventListener('click', function (e) {
                table.DelUser(this);
            });
        }  
    }
    SetListEdits(){
        let edits = this.GetEdits();
        for (var i = 0; i < edits.length; i++) {
            edits[i].addEventListener('click', function (e) {
                table.EditUser(this);
            });
        }  
    }
    Insert_Row(){
        let insert_row = this.table;
        document.getElementById('dash-lightbox').style.position = 'absolute';
        document.getElementById('dash-lightbox').style.top = '0';
        document.getElementById('dash-lightbox').style.backgroundColor = '#000';
        document.getElementById('dash-lightbox').style.opacity = '.7';
        document.getElementById('dash-lightbox').style.width = '100%';
        document.getElementById('dash-lightbox').style.height = '100vh';


        /*let new_row = del_row.insertRow();
            new_row.insertCell(0).innerHTML = '';
            new_row.insertCell(1).innerHTML = '';
            new_row.insertCell(2).innerHTML = '';
            new_row.insertCell(3).innerHTML = '';
            new_row.insertCell(4).innerHTML = '';
            new_row.insertCell(5).innerHTML = '<i class="fas fa-pencil-alt dash-edit"></i><i class="far fa-trash-alt dash-delete"></i>';*/
    }
    EditUser(el){
        let edit_row = el.parentNode.parentNode;
        console.log( edit_row );
    } 
    DelUser(el){
        let del_row = el.parentNode.parentNode;
        del_row.remove();
    }     
}
    let table_users = document.getElementById('table-users');
    let table = new UsersTable( table_users );
    table.SetListDels();
    table.SetListEdits();

    document.getElementById('dash-add-user').addEventListener( 'click' , function(e){
        e.preventDefault();
        table.Insert_Row();
    });
</script>

</body>
</html>

