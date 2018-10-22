<?php

/* report/report.twig */
class __TwigTemplate_4d00866d861d2f48ace6a23962d84b808a6ac9d6e9d36551e3559a21b000b15b extends Twig_Template
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
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-report').toggleClass('d-none');\" class=\"btn btn-light d-md-none d-lg-none\"><i class=\"fas fa-filter\"></i></button>
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
    <div class=\"card mb-3\">
      <div class=\"card-header\"><i class=\"fas fa-chart-bar\"></i> ";
        // line 18
        echo ($context["text_type"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"card\">
          <div class=\"card-body bg-light\">
            <div class=\"input-group\">
              <select name=\"report\" onchange=\"location = this.value;\" class=\"form-control\">
                ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reports"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["report"]) {
            // line 25
            echo "                  ";
            if ((($context["code"] ?? null) == twig_get_attribute($this->env, $this->source, $context["report"], "code", array()))) {
                // line 26
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "href", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "text", array());
                echo "</option>
                  ";
            } else {
                // line 28
                echo "                    <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["report"], "text", array());
                echo "</option>
                  ";
            }
            // line 30
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['report'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "              </select>
              <div class=\"input-group-append\"><span class=\"input-group-text\"><i class=\"fas fa-filter\"></i>&nbsp;";
        // line 32
        echo ($context["text_filter"] ?? null);
        echo "</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div>";
        // line 38
        echo ($context["report"] ?? null);
        echo "</div>
  </div>
</div>
";
        // line 41
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "report/report.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 41,  114 => 38,  105 => 32,  102 => 31,  96 => 30,  88 => 28,  80 => 26,  77 => 25,  73 => 24,  64 => 18,  57 => 13,  46 => 11,  42 => 10,  37 => 8,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "report/report.twig", "/var/www/html/vncrafts.com/admin/view/template/report/report.twig");
    }
}
