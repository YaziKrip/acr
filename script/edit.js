$(".uzm").click(function(){
    id = this.id;
    if($("#NameBook").val() !== "" && $("#AuthorBook").val() !== "" && $("#DateOrder").val() !== "" && $("#BookIzdan").val() !== "" ){
        $.post("./edit.php", {
            id : id,
            NameBook : $("#NameBook"+id).val() ,
            AuthorBook : $("#AuthorBook"+id).val() ,
            DateOrder : $("#DateOrder"+id).val() ,
            BookIzdan : $("#BookIzdan"+id).val()
        } ,function(data){
            console.log(data);

        }
        )
    }else{
        alert("заполните все поля!");
    }
})