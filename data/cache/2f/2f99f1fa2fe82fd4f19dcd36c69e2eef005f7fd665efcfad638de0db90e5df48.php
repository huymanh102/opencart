<?php

/* common/filemanager.twig */
class __TwigTemplate_70c48f165e16138a25af2166bafb012dcce44526c7dcadad7f94f904775bf8ad extends Twig_Template
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
        echo "<div id=\"modal-image\" class=\"modal show\">
  <div id=\"filemanager\" class=\"modal-dialog modal-lg\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><span aria-hidden=\"true\">&times;</span></button>
      </div>
      <div class=\"modal-body\">
        <div class=\"row\">
          <div class=\"col-sm-5\">
            <a href=\"";
        // line 11
        echo ($context["parent"] ?? null);
        echo "\" id=\"button-parent\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_parent"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-level-up-alt fa-fw\"></i></a> <a href=\"";
        echo ($context["refresh"] ?? null);
        echo "\" id=\"button-refresh\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-sync\"></i></a>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 12
        echo ($context["button_upload"] ?? null);
        echo "\" id=\"button-upload\" class=\"btn btn-primary\"><i class=\"fas fa-upload fa-fw\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 13
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-folder\" class=\"btn btn-light\"><i class=\"fas fa-folder fa-fw\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 14
        echo ($context["button_delete"] ?? null);
        echo "\" id=\"button-delete\" class=\"btn btn-danger\"><i class=\"fas fa-trash-alt fa-fw\"></i></button>
            <input type=\"hidden\" name=\"directory\" value=\"";
        // line 15
        echo ($context["directory"] ?? null);
        echo "\"/>
          </div>
          <div class=\"col-sm-7\">
            <div class=\"input-group\">
              <input type=\"text\" name=\"search\" value=\"";
        // line 19
        echo ($context["filter_name"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_search"] ?? null);
        echo "\" class=\"form-control\">
              <div class=\"input-group-append\">
                <button type=\"button\" id=\"button-search\" data-toggle=\"tooltip\" title=\"";
        // line 21
        echo ($context["button_search"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-search fa-fw\"></i></button>
              </div>
            </div>
          </div>
        </div>
        <hr/>
        <div class=\"row\">
          ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["directories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["directory"]) {
            // line 29
            echo "            <div class=\"col-sm-3 col-6 mb-3 text-center\">
              <div class=\"h-100\">
                <a href=\"";
            // line 31
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "href", array());
            echo "\" class=\"directory mb-1\"><i class=\"fas fa-folder fa-5x\"></i></a> <label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "path", array());
            echo "\"/>
                  ";
            // line 32
            echo twig_get_attribute($this->env, $this->source, $context["directory"], "name", array());
            echo "
                </label>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['directory'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "          ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["images"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 38
            echo "            <div class=\"col-sm-3 col-6 mb-3 text-center\">
              <div class=\"h-100\">
                <a href=\"";
            // line 40
            echo twig_get_attribute($this->env, $this->source, $context["image"], "href", array());
            echo "\" class=\"thumbnail mb-1\"><img src=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "thumb", array());
            echo "\" alt=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", array());
            echo "\" title=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", array());
            echo "\" class=\"img-thumbnail\"/></a> <label class=\"mt-1\"><input type=\"checkbox\" name=\"path[]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["image"], "path", array());
            echo "\"/>
                  ";
            // line 41
            echo twig_get_attribute($this->env, $this->source, $context["image"], "name", array());
            echo "</label>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 45
        echo "        </div>
        ";
        // line 46
        if (($context["pagination"] ?? null)) {
            // line 47
            echo "          <div class=\"modal-footer\">";
            echo ($context["pagination"] ?? null);
            echo "</div>
        ";
        }
        // line 49
        echo "      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#modal-image').on('click', '#button-parent', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + ' div#filemanager');
});

\$('#modal-image').on('click', '#button-refresh', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + ' div#filemanager');
});

\$('#modal-image').on('keydown', 'input[name=\\'search\\']', function(e) {
\tif (e.which == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('#modal-image').on('click', '#button-search', function(e) {
\tvar url = 'index.php?route=common/filemanager&user_token=";
        // line 73
        echo ($context["user_token"] ?? null);
        echo "';

\tvar directory = \$('#modal-image input[name=\\'directory\\']').val();

\tif (directory) {
\t\turl += '&directory=' + encodeURIComponent(directory);
\t}

\tvar filter_name = \$('#modal-image input[name=\\'search\\']').val();

\tif (filter_name) {
\t\turl += '&filter_name=' + encodeURIComponent(filter_name);
\t}

  ";
        // line 87
        if (($context["thumb"] ?? null)) {
            // line 88
            echo "\turl += '&thumb=";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
            echo "';
  ";
        }
        // line 90
        echo "
  ";
        // line 91
        if (($context["target"] ?? null)) {
            // line 92
            echo "\turl += '&target=";
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "';
  ";
        }
        // line 94
        echo "
  ";
        // line 95
        if (($context["ckeditor"] ?? null)) {
            // line 96
            echo "\turl += '&ckeditor=";
            echo twig_escape_filter($this->env, ($context["ckeditor"] ?? null), "js");
            echo "';
  ";
        }
        // line 98
        echo "
\t\$('#modal-image').load(url + ' div#filemanager');
});

\$('#modal-image').on('click', '#button-upload', function() {
\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file[]\" value=\"\" multiple=\"multiple\" /></form>');

\t\$('#form-upload input[name=\\'file[]\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file[]\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\tvar url = 'index.php?route=common/filemanager/upload&user_token=";
        // line 117
        echo ($context["user_token"] ?? null);
        echo "';

\t\t\tvar directory = \$('#modal-image input[name=\\'directory\\']').val();

\t\t\tif (directory) {
\t\t\t\turl += '&directory=' + encodeURIComponent(directory);
\t\t\t}

\t\t\t\$.ajax({
\t\t\t\turl: url,
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fas fa-circle-notch fa-spin fa-fw\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', true);
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$('#button-upload i').replaceWith('<i class=\"fas fa-upload fa-fw\"></i>');
\t\t\t\t\t\$('#button-upload').prop('disabled', false);
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\talert(json['error']);
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});

\$('#modal-image').popover({
\ttrigger: 'click',
\thtml: true,
\tcontainer: '#modal-image',
\tplacement: 'bottom',
\tselector: '#button-folder',
\ttitle: '";
        // line 166
        echo ($context["entry_folder"] ?? null);
        echo "',
\tcontent: function() {
\t\thtml  = '<div class=\"input-group\">';
\t\thtml += '  <input type=\"text\" name=\"folder\" value=\"\" placeholder=\"";
        // line 169
        echo ($context["entry_folder"] ?? null);
        echo "\" class=\"form-control\">';
\t\thtml += '  <div class=\"input-group-append\"><button type=\"button\" title=\"";
        // line 170
        echo ($context["button_folder"] ?? null);
        echo "\" id=\"button-create\" class=\"btn btn-primary\"><i class=\"fas fa-plus-circle\"></i></button></div>';
\t\thtml += '</div>';

\t\treturn html;
\t}
});

\$('#modal-image').on('click', '#button-create', function() {
\tvar url = 'index.php?route=common/filemanager/folder&user_token=";
        // line 178
        echo ($context["user_token"] ?? null);
        echo "';

\tvar directory = \$('#modal-image input[name=\\'directory\\']').val();

\tif (directory) {
\t\turl += '&directory=' + encodeURIComponent(directory);
\t}

\t\$.ajax({
\t\turl: url,
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: 'folder=' + encodeURIComponent(\$('#modal-image input[name=\\'folder\\']').val()),
\t\tbeforeSend: function() {
\t\t\t\$('#button-create').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-create').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\talert(json['error']);
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\talert(json['success']);

\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#modal-image').on('click', '#button-delete', function(e) {
\tif (confirm('";
        // line 215
        echo ($context["text_confirm"] ?? null);
        echo "')) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=common/filemanager/delete&user_token=";
        // line 217
        echo ($context["user_token"] ?? null);
        echo "',
\t\t\ttype: 'post',
\t\t\tdataType: 'json',
\t\t\tdata: \$('input[name^=\\'path\\']:checked'),
\t\t\tbeforeSend: function() {
\t\t\t\t\$('#button-delete i').replaceWith('<i class=\"fas fa-circle-notch fa-spin fa-fw\"></i>');
\t\t\t\t\$('#button-delete').prop('disabled', true);
\t\t\t},
\t\t\tcomplete: function() {
\t\t\t\t\$('#button-delete i').replaceWith('<i class=\"fas fa-trash-alt fa-fw\"></i>');
\t\t\t\t\$('#button-delete').prop('disabled', false);
\t\t\t},
\t\t\tsuccess: function(json) {
\t\t\t\tif (json['error']) {
\t\t\t\t\talert(json['error']);
\t\t\t\t}

\t\t\t\tif (json['success']) {
\t\t\t\t\talert(json['success']);

\t\t\t\t\t\$('#button-refresh').trigger('click');
\t\t\t\t}
\t\t\t},
\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t}
\t\t});
\t}
});

\$('#modal-image').on('click', 'a.directory', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + ' div#filemanager');
});

\$('#modal-image').on('click', 'a.thumbnail', function(e) {
\te.preventDefault();

  ";
        // line 256
        if (($context["thumb"] ?? null)) {
            // line 257
            echo "\t\$('";
            echo twig_escape_filter($this->env, ($context["thumb"] ?? null), "js");
            echo "').attr('src', \$(this).find('img').attr('src'));

\t\$('";
            // line 259
            echo twig_escape_filter($this->env, ($context["target"] ?? null), "js");
            echo "').val(\$(this).parent().find('input').val());
  ";
        }
        // line 261
        echo "
  ";
        // line 262
        if (($context["ckeditor"] ?? null)) {
            // line 263
            echo "\tCKEDITOR.instances['";
            echo twig_escape_filter($this->env, ($context["ckeditor"] ?? null), "js");
            echo "'].insertHtml('<img src=\"' + \$(this).attr('href') + '\" alt=\"\" title=\"\" />');
  ";
        }
        // line 265
        echo "
\t\$('#modal-image').modal('hide');
});

\$('#modal-image').on('click', '.pagination a', function(e) {
\te.preventDefault();

\t\$('#modal-image').load(\$(this).attr('href') + ' div#filemanager');
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "common/filemanager.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  429 => 265,  423 => 263,  421 => 262,  418 => 261,  413 => 259,  407 => 257,  405 => 256,  363 => 217,  358 => 215,  318 => 178,  307 => 170,  303 => 169,  297 => 166,  245 => 117,  224 => 98,  218 => 96,  216 => 95,  213 => 94,  207 => 92,  205 => 91,  202 => 90,  196 => 88,  194 => 87,  177 => 73,  151 => 49,  145 => 47,  143 => 46,  140 => 45,  130 => 41,  118 => 40,  114 => 38,  109 => 37,  98 => 32,  92 => 31,  88 => 29,  84 => 28,  74 => 21,  67 => 19,  60 => 15,  56 => 14,  52 => 13,  48 => 12,  38 => 11,  29 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/filemanager.twig", "/var/www/html/vncrafts.com/admin/view/template/common/filemanager.twig");
    }
}
