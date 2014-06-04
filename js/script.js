var z_type = 1;

setTimeout(z_rep, 2000);

function z_rep(){
  var source = $('#source').val();

  var zm = source + '\n';
  zm = zm.replace(/…/g, '...');
  zm = zm.replace(/([¬])/g, '');
  zm = zm.replace(/([\t]){2,}/g, ' ');
  zm = zm.replace(/([ ]){2,}/g, ' ');
  zm = zm.replace(/([^\. \w])+([\s\d\r\n])*([\r\n])([\s])*/g, '\n');
  zm = zm.replace(/([\s\.\r\n])*([\r\n])([\s])*/g, '\n');
  if(z_type == 1) {
    zm = zm.replace(/([-])+([\r\n])([\s])*/g, '');
  }
  zm = zm.replace(/([\r\n])*$/g, '');

  $('#target').val(zm);
  setTimeout(z_rep, 500);
}