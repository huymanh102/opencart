<?php

/* tool/backup.twig */
class __TwigTemplate_30c67945ff05102809bd27c982cce791fb44a4851cc1e3bca0faeaa591f25528 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo ($context["header"] ?? null);
        echo ($context["column_left"] ?? null);
        echo "
<div id=\"content\">
  <div class=\"page-header\">
    <div class=\"container-fluid\">
      <div class=\"float-right\">
        <button type=\"button\" id=\"button-upload\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_upload"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-upload\"></i></button>
      </div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
            echo "          <li class=\"breadcrumb-item\"><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 17
        if (($context["error_warning"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-exchange-alt\"></i> ";
        // line 28
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form>
          <fieldset>
            <legend>";
        // line 32
        echo ($context["text_progress"] ?? null);
        echo "</legend>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 34
        echo ($context["entry_progress"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div id=\"progress-backup\" class=\"progress\">
                  <div id=\"progress-bar\" class=\"progress-bar\"></div>
                </div>
                <div id=\"progress-text\"></div>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 44
        echo ($context["text_option"] ?? null);
        echo "</legend>
            <div class=\"form-group row\">
              <label class=\"col-sm-2 col-form-label\">";
        // line 46
        echo ($context["entry_export"] ?? null);
        echo "</label>
              <div class=\"col-sm-10\">
                <div class=\"form-control\" style=\"height: 150px; overflow: auto;\">
                  <label class=\"form-check\"><input type=\"checkbox\" class=\"form-check-input\" onchange=\"\$(this).parent().parent().find(':checkbox').not(this).prop('checked', \$(this).prop('checked'));\"/> ";
        // line 49
        echo ($context["text_all"] ?? null);
        echo "</label>
                  ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["tables"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["table"]) {
            // line 51
            echo "                    <label class=\"form-check\"><input type=\"checkbox\" name=\"backup[]\" value=\"";
            echo $context["table"];
            echo "\" checked=\"checked\" class=\"form-check-input\"/> ";
            echo $context["table"];
            echo "</label>
                  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['table'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                </div>
              </div>
            </div>
            <div class=\"form-group row\">
              <div class=\"offset-sm-2 col-sm-10\">
                <button type=\"button\" id=\"button-backup\" data-loading-text=\"";
        // line 58
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-success\"><i class=\"fas fa-upload\"></i> ";
        echo ($context["button_backup"] ?? null);
        echo "</button>
              </div>
            </div>
          </fieldset>
          <fieldset>
            <legend>";
        // line 63
        echo ($context["text_history"] ?? null);
        echo "</legend>
            <div class=\"alert alert-info\"><i class=\"fas fa-exclamation-circle\"></i> ";
        // line 64
        echo ($context["text_import"] ?? null);
        echo "</div>
            <div id=\"history\"></div>
          </fieldset>
        </form>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#history').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#history').load(this.href);
});

\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 79
        echo ($context["user_token"] ?? null);
        echo "');
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-backup').on('click', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\tbackup('index.php?route=tool/backup/backup&user_token=";
        // line 86
        echo ($context["user_token"] ?? null);
        echo "&table=' + \$('input[name^=\\'backup\\']:checked').first().val());
});

function backup(url) {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdata: \$('input[name^=\\'backup\\']:checked'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-backup').button('loading');
\t\t\t\$('#button-upload, #history .btn').prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['progress']) {
\t\t\t\t\$('#progress-bar').css('width', json['progress'] + '%');
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$('#button-backup').button('reset');
\t\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 123
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$('#button-backup').button('reset');
\t\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tbackup(json['next']);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

\t\t\t\$('#button-backup').button('reset');
\t\t\t\$('#button-upload, #history .btn').prop('disabled', false);
\t\t}
\t});
};

// Restore
\$('#history').on('click', '.btn-warning', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');

\trestore('index.php?route=tool/backup/restore&user_token=";
        // line 151
        echo ($context["user_token"] ?? null);
        echo "&filename=' + encodeURIComponent(\$(this).val(), this));
});

function restore(url, element) {
\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', true);
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['progress']) {
\t\t\t\t\$('#progress-bar').css('width', json['progress'] + '%');
\t\t\t}

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 174
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$(element).button('reset');
\t\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').css('width', '100%').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<div class=\"text-success\">' + json['success'] + '</div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 184
        echo ($context["user_token"] ?? null);
        echo "');

\t\t\t\t\$(element).button('reset');
\t\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\trestore(json['next'], element);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);

\t\t\t\$(element).button('reset');
\t\t\t\$('#button-upload, #button-backup, #history .btn').not(element).prop('disabled', false);
\t\t}
\t});
}

\$('#button-upload').on('click', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"upload\" /></form>');

\t\$('#form-upload input[name=\\'upload\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'upload\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/backup/upload&user_token=";
        // line 223
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload').button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload').button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.alert-dismissible').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\t\$('#content > .container-fluid').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 246
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

// Delete
\$('#history').on('click', '.btn-danger', function() {
\tvar element = this;

\t\$.ajax({
\t\turl: 'index.php?route=tool/backup/delete&user_token=";
        // line 262
        echo ($context["user_token"] ?? null);
        echo "&filename=' + encodeURIComponent(\$(element).val()),
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$(element).button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$(element).button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#history').before('<div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\$('#history').load('index.php?route=tool/backup/history&user_token=";
        // line 281
        echo ($context["user_token"] ?? null);
        echo "');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 290
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "tool/backup.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  425 => 290,  413 => 281,  391 => 262,  372 => 246,  346 => 223,  304 => 184,  291 => 174,  265 => 151,  234 => 123,  221 => 113,  191 => 86,  181 => 79,  163 => 64,  159 => 63,  149 => 58,  142 => 53,  131 => 51,  127 => 50,  123 => 49,  117 => 46,  112 => 44,  99 => 34,  94 => 32,  87 => 28,  84 => 27,  76 => 23,  73 => 22,  65 => 18,  63 => 17,  57 => 13,  46 => 11,  42 => 10,  37 => 8,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tool/backup.twig", "/var/www/html/vncrafts.com/admin/view/template/tool/backup.twig");
    }
}
