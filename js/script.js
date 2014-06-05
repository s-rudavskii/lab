setTimeout(z_rep, 100);

function z_rep(){
  var source = $('#source').val();

  var zm = source + '\n';
  zm = zm.replace(/…/g, '...');
  zm = zm.replace(/([¬])/g, '');
  zm = zm.replace(/([\t])/g, ' ');
  zm = zm.replace(/([ ]){2,}/g, ' ');
  zm = zm.replace(/([\s])*([\.])+([\s\d\r\n\.])*([\r\n])([\s])*/g, '\n');
  zm = zm.replace(/([\s\.\r\n])*([\r\n])([\s])*/g, '\n');
  if($('#btn-1').hasClass('active')) {
    zm = zm.replace(/([\d\s])+([\r\n])/g, '\n');
  }
  if($('#btn-0').hasClass('active')) {
    zm = zm.replace(/([-])+([\r\n])/g, '');
  }
  zm = zm.trim();
  if($('#btn-2').hasClass('active')) {
    var zma = zm.split('\n');
    zm = '';
    zma.forEach(function(string){
      zm = zm + string.substr(0,1).toUpperCase()+string.substr(1)+'\n';
    });
  }

  $('#target').val(zm);
  setTimeout(z_rep, 1000);
}

function z_xml(){
  var target = $('#target').val();
  var title = $('#title').val();
  var xml = '<?xml version="1.0" encoding="utf-8" ?>' +
    '<data>' +
    '<setup source="" next="" checkCount="0" autoLoadTime="1" taskTime="0">' +
    '  <book toolHide="0" fullScreen="false" hideTitle="false" hideObjects="false" margin="10" zoomMin="0.5" zoomMax="2" zoomStep="0.1">' +
    '    <content title="' + title + '" >' +
    '      <item text="" color="FFFFFF" lMargin="220" size="40"/>' +
    '      <item page="1" text="Обкладинка" color="000066" lMargin="0" size="35" />' +
    '      <item page="4" text="Зміст" color="000066" lMargin="0" size="35" />';
  target.forEach(function(string){
    xml = xml + '\n      <item page="" text="' + string +
      '" color="000066" lMargin="0" size="35" />';
  });
  xml = xml + '\n    </content>' +
    '  </book>' +
    '</setup>' +
    '</data>';

}

function un(){
  $('#copy').text('В буфер');
}

$(document).ready(function(){
  $("#copy").zclip({
    path: "./inc/ZeroClipboard.swf",
    copy: function(){
      return $('#target').val();
    },
    afterCopy: function(){
      $('#copy').text('Готово');
      setTimeout(un,1000)
    }
  });
});