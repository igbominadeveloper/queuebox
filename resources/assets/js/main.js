/**
 * Created by Favour Afolayan on 7/1/2018.
 */
function ping() {
    swal('yes');
}
function checkImage(event) {
    var size = 204800;
    var file_size = document.getElementById('clip').files[0].size;
    var file = document.getElementById('clip').value;
    var allowedExtensions = /(\.jpg|\.jpeg|\.png|\.gif)$/i;
    if (file_size > size) {
        document.getElementById('clip').value = '';
        swal('Error!!!', 'Image cannot exceed 200kb', 'warning');
        return false;
    }
    else if (!allowedExtensions.exec(file)) {
        document.getElementById('clip').value = '';
        swal('Error!!!', '.jpeg/.jpg/.png/.gif files only', 'warning');
        return false;
    }
}