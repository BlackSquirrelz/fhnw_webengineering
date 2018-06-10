
var deleting = (function($){

    var projectID;
    var _this = this;

    var deleteProject = function(id){
        /* $.ajax({
             type: "HEAD",
             headers: {
                 "Authorization": "Bearer " + localStorage.getItem("token")
             },
             url: serviceEndpointURL + "/token",
             success: function (data, textStatus, response) {
                 callback(true);
                 $('#project-' + projectId).remove();
             },
             error: function (jqXHR, textStatus, errorThrown) {
                 callback(false);
             }
         })*/
        console.log(id);
    };

    $('#confirm-modal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var recipient = button.data('project') // Extract info from data-* attributes
        // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
        // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
        var modal = $(this)
        console.log(recipient);
        _this.projectID=recipient;

    })

    $('#removeButton').click(function(e){
        console.log(_this.projectID);
        deleteProject(_this.projectID);
    });



})(jQuery);



