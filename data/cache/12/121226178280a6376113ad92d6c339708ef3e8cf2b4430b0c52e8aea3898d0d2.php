<?php

/* tool/upgrade.twig */
class __TwigTemplate_bb11bcfc6fabeffed0752066a32d296db2c0f9e0f76bebf03008b770b1a86a89 extends Twig_Template
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
      <h1>";
        // line 5
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 8
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
        // line 10
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 14
        if (($context["error_warning"] ?? null)) {
            // line 15
            echo "      <div class=\"alert alert-danger\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 19
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 20
            echo "      <div class=\"alert alert-success\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 24
        echo "    <div id=\"collapse\">
      <div class=\"card\">
        <div class=\"card-header\" data-toggle=\"collapse\" data-target=\"#collapse-version\"><i class=\"fas fa-sync\"></i> ";
        // line 26
        echo ($context["text_version"] ?? null);
        echo "</div>
        <div id=\"collapse-version\" data-parent=\"#collapse\" class=\"collapse show\">
          <div class=\"card-body\">
            <fieldset>
              ";
        // line 30
        if (($context["error_warning"] ?? null)) {
            // line 31
            echo "                <legend class=\"text-danger\" id=\"btn-version\">";
            echo ($context["text_update"] ?? null);
            echo "</legend>
              ";
        } else {
            // line 33
            echo "                <legend id=\"btn-version\">";
            echo ($context["text_update"] ?? null);
            echo "</legend>
              ";
        }
        // line 35
        echo "            </fieldset>
            <div class=\"alert alert-info\">
              <p><strong><i class=\"fas fa-exclamation-circle\"></i> ";
        // line 37
        echo ($context["text_tips"] ?? null);
        echo "</strong></p>
              <ol>
                <li>";
        // line 39
        echo ($context["text_make"] ?? null);
        echo "
                  <br/>
                  ";
        // line 41
        echo ($context["text_backup"] ?? null);
        echo " <a href=\"";
        echo ($context["backup"] ?? null);
        echo "\">";
        echo ($context["text_here"] ?? null);
        echo "</a>;
                  <br/>
                  ";
        // line 43
        echo ($context["text_cloud"] ?? null);
        echo " <a href=\"";
        echo ($context["opencart_account"] ?? null);
        echo "\" target=\"_blank\">";
        echo ($context["text_here"] ?? null);
        echo "</a>.
                </li>
                <li>";
        // line 45
        echo ($context["text_check"] ?? null);
        echo "</li>
                <li>";
        // line 46
        echo ($context["text_better"] ?? null);
        echo "</li>
              </ol>
            </div>
            <fieldset>
              <legend id=\"version\">";
        // line 50
        echo ($context["text_change"] ?? null);
        echo "</legend>
              <textarea wrap=\"off\" rows=\"10\" readonly class=\"form-control\">";
        // line 51
        echo ($context["log"] ?? null);
        echo "</textarea>
            </fieldset>
            <br/>
            <div class=\"text-right\"><a href=\"#collapse-compatible\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        // line 54
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-compatible\"><i class=\"fas fa-random\"></i> ";
        // line 59
        echo ($context["text_compatibility"] ?? null);
        echo "</div>
        <div id=\"collapse-compatible\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <div class=\"alert alert-warning\">
              ";
        // line 63
        echo ($context["text_before"] ?? null);
        echo "
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
            </div>
            <table class=\"table table-bordered table-hover\">
              <thead>
                <tr>
                  <td class=\"text-left\">";
        // line 69
        echo ($context["column_name"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 70
        echo ($context["column_compatible"] ?? null);
        echo "</td>
                  <td class=\"text-center\">";
        // line 71
        echo ($context["column_available"] ?? null);
        echo "</td>
                </tr>
              </thead>
              <tbody>
                ";
        // line 75
        if (($context["extensions"] ?? null)) {
            // line 76
            echo "                  ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["extensions"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["extension"]) {
                // line 77
                echo "                    <tr>
                      <td class=\"text-left\"><a href=\"";
                // line 78
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "link", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["extension"], "name", array());
                echo "</a></td>
                      <td class=\"text-center\">";
                // line 79
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "compatible", array())) {
                    echo "<i class=\"fas fa-check text-success\"></i>";
                } else {
                    echo "<i class=\"fas fa-times text-danger\"></i>";
                }
                echo "</td>
                      <td class=\"text-center\">";
                // line 80
                if (twig_get_attribute($this->env, $this->source, $context["extension"], "available", array())) {
                    echo "<i class=\"fas fa-check text-success\"></i>";
                } else {
                    echo "<i class=\"fas fa-times text-danger\"></i>";
                }
                echo "</td>
                    </tr>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['extension'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "                ";
        } else {
            // line 84
            echo "                  <tr>
                    <td class=\"text-center\" colspan=\"3\">";
            // line 85
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                  </tr>
                ";
        }
        // line 88
        echo "              </tbody>
            </table>
            <br/>
            <div class=\"text-right\"><a href=\"#collapse-upgrade\" data-toggle=\"collapse\" data-parent=\"#collapse\" class=\"btn btn-primary\"><i class=\"fas fa-arrow-right\"></i> ";
        // line 91
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
      </div>
      <div class=\"card\">
        <div class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-upgrade\"><i class=\"fas fa-check\"></i> ";
        // line 96
        echo ($context["text_upgrade"] ?? null);
        echo "</div>
        <div id=\"collapse-upgrade\" data-parent=\"#collapse\" class=\"collapse\">
          <div class=\"card-body\">
            <fieldset>
              <legend>";
        // line 100
        echo ($context["text_progress"] ?? null);
        echo "</legend>
              <div class=\"form-group row\">
                <label class=\"col-sm-2 col-form-label\">";
        // line 102
        echo ($context["text_progress_short"] ?? null);
        echo "</label>
                <div class=\"col-sm-10\">
                  <div id=\"progress-download\" class=\"progress\">
                    <div id=\"progress-bar\" class=\"progress-bar\"></div>
                  </div>
                  <div id=\"progress-text\"></div>
                </div>
              </div>
              <div class=\"col-sm-10 offset-sm-2\">
                <div class=\"form-group row\">
                  ";
        // line 112
        if (($context["upgrade"] ?? null)) {
            // line 113
            echo "                    <button type=\"button\" id=\"button-upgrade\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-success\"><i class=\"fas fa-play\"></i> ";
            echo ($context["button_start"] ?? null);
            echo "</button>
                  ";
        } else {
            // line 115
            echo "                    <button type=\"button\" id=\"button-upgrade\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-success\" disabled=\"disabled\"><i class=\"fas fa-play\"></i> ";
            echo ($context["button_start"] ?? null);
            echo "</button>
                  ";
        }
        // line 117
        echo "                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend>";
        // line 121
        echo ($context["text_log"] ?? null);
        echo "</legend>
              <textarea id=\"log\" wrap=\"off\" rows=\"10\" readonly class=\"form-control\"></textarea>
            </fieldset>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-upgrade').on('click', function() {
\t\$('#progress-bar').css('width', '0%');
\t\$('#progress-bar').removeClass('progress-bar-danger progress-bar-success');
\t\$('#progress-text').html('";
        // line 134
        echo ($context["text_download"] ?? null);
        echo "');
\t\$('#log').append('";
        // line 135
        echo ($context["text_download"] ?? null);
        echo "' + \"\\n\");

\t\$.ajax({
\t\turl: 'index.php?route=tool/upgrade/download&user_token=";
        // line 138
        echo ($context["user_token"] ?? null);
        echo "&version=";
        echo ($context["version"] ?? null);
        echo "',
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-upgrade').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');
\t\t\t\t\$('#log').append(json['error'] + \"\\n\");
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-bar').css('width', '20%');
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\$('#log').append(json['text'] + \"\\n\");
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], 1);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\$('#log').append(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

function next(url, i) {
\ti = i + 1;

\t\$.ajax({
\t\turl: url,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#progress-bar').css('width', (i * 20) + '%');

\t\t\tif (json['error']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-danger');
\t\t\t\t\$('#progress-text').html('<div class=\"invalid-tooltip\">' + json['error'] + '</div>');
\t\t\t\t\$('#log').append(json['error'] + \"\\n\");

\t\t\t\t\$('#button-upgrade').button('reset');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#progress-bar').addClass('progress-bar-success');
\t\t\t\t\$('#progress-text').html('<span class=\"text-success\">' + json['success'] + '</span>');
\t\t\t\t\$('#log').append(json['success'] + \"\\n\");

\t\t\t\t\$('#button-upgrade').button('reset');
\t\t\t}

\t\t\tif (json['text']) {
\t\t\t\t\$('#progress-text').html(json['text']);
\t\t\t\t\$('#log').append(json['text'] + \"\\n\");
\t\t\t}

\t\t\tif (json['next']) {
\t\t\t\tnext(json['next'], i);
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\$('#log').append(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
}

//--></script>
";
        // line 207
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "tool/upgrade.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 207,  332 => 138,  326 => 135,  322 => 134,  306 => 121,  300 => 117,  292 => 115,  284 => 113,  282 => 112,  269 => 102,  264 => 100,  257 => 96,  249 => 91,  244 => 88,  238 => 85,  235 => 84,  232 => 83,  219 => 80,  211 => 79,  205 => 78,  202 => 77,  197 => 76,  195 => 75,  188 => 71,  184 => 70,  180 => 69,  171 => 63,  164 => 59,  156 => 54,  150 => 51,  146 => 50,  139 => 46,  135 => 45,  126 => 43,  117 => 41,  112 => 39,  107 => 37,  103 => 35,  97 => 33,  91 => 31,  89 => 30,  82 => 26,  78 => 24,  70 => 20,  67 => 19,  59 => 15,  57 => 14,  51 => 10,  40 => 8,  36 => 7,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "tool/upgrade.twig", "/var/www/html/vncrafts.com/admin/view/template/tool/upgrade.twig");
    }
}
