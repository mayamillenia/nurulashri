$(document).ready(function(){

  $('.formatTabel').dataTable({
    "paging":   false,
    "ordering": true,
    "info":     false,
    "language" : {
            "zeroRecords": " "             
        },
  });

	$('.tanggalNurash').datepicker({
			format: 'dd-M-yyyy',
			autoclose: true,
		});
	var date_last_clicked = null;
});

function previewImage() {
      document.getElementById("image-preview").style.display = "block";
      var oFReader = new FileReader();
       oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
   
      oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
      };
};

function hapusKajianMuslim(th){
  var id = th.attr('value');
  var conf = confirm('Yakin untuk menghapusnya?');
  var baseurl = "http://192.168.168.117/nurulashri/";

  if (conf == true) {
    $.ajax({
      type: "POST",
      url: baseurl+"KajianMuslim/Kajian/hapusKajian/"+id,
      data: {
        id: id
      },
      success: function(response){
          th.parent('td').parent('tr').remove();
      }
    })
  }else{
    alert('hapus di batalkan');
    return false;
  }
}