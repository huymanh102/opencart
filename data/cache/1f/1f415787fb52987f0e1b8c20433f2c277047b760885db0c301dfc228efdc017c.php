<?php

/* common/profile.twig */
class __TwigTemplate_9ac8f672956840551c915bc9c7d2371c9d1dad5c3549aeb98d07cc92041c4644 extends Twig_Template
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
        <button type=\"submit\" form=\"form-user\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_save"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-save\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["cancel"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_cancel"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-reply\"></i></a></div>
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
        if (($context["success"] ?? null)) {
            // line 18
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 22
        echo "    ";
        if (($context["error_warning"] ?? null)) {
            // line 23
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 27
        echo "    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 28
        echo ($context["text_edit"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <form action=\"";
        // line 30
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-user\">
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-username\">";
        // line 32
        echo ($context["entry_username"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"username\" value=\"";
        // line 34
        echo ($context["username"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_username"] ?? null);
        echo "\" id=\"input-username\" class=\"form-control\"/>
              ";
        // line 35
        if (($context["error_username"] ?? null)) {
            // line 36
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_username"] ?? null);
            echo "</div>
              ";
        }
        // line 38
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-firstname\">";
        // line 41
        echo ($context["entry_firstname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"firstname\" value=\"";
        // line 43
        echo ($context["firstname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_firstname"] ?? null);
        echo "\" id=\"input-firstname\" class=\"form-control\"/>
              ";
        // line 44
        if (($context["error_firstname"] ?? null)) {
            // line 45
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_firstname"] ?? null);
            echo "</div>
              ";
        }
        // line 47
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-lastname\">";
        // line 50
        echo ($context["entry_lastname"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"lastname\" value=\"";
        // line 52
        echo ($context["lastname"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_lastname"] ?? null);
        echo "\" id=\"input-lastname\" class=\"form-control\"/>
              ";
        // line 53
        if (($context["error_lastname"] ?? null)) {
            // line 54
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_lastname"] ?? null);
            echo "</div>
              ";
        }
        // line 56
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-email\">";
        // line 59
        echo ($context["entry_email"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"text\" name=\"email\" value=\"";
        // line 61
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
              ";
        // line 62
        if (($context["error_email"] ?? null)) {
            // line 63
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_email"] ?? null);
            echo "</div>
              ";
        }
        // line 65
        echo "            </div>
          </div>
          <div class=\"form-group row\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-image\">";
        // line 68
        echo ($context["entry_image"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <div class=\"card image\">
                <img src=\"";
        // line 71
        echo ($context["thumb"] ?? null);
        echo "\" alt=\"\" title=\"\" id=\"thumb-image\" data-placeholder=\"";
        echo ($context["placeholder"] ?? null);
        echo "\" class=\"card-img-top\"/> <input type=\"hidden\" name=\"image\" value=\"";
        echo ($context["image"] ?? null);
        echo "\" id=\"input-image\"/>
                <div class=\"card-body\">
                  <button type=\"button\" data-toggle=\"image\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-primary btn-sm btn-block\"><i class=\"fas fa-pencil-alt\"></i> ";
        // line 73
        echo ($context["button_edit"] ?? null);
        echo "</button>
                  <button type=\"button\" data-toggle=\"clear\" data-target=\"#input-image\" data-thumb=\"#thumb-image\" class=\"btn btn-warning btn-sm btn-block\"><i class=\"fas fa-trash-alt\"></i> ";
        // line 74
        echo ($context["button_clear"] ?? null);
        echo "</button>
                </div>
              </div>
            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-password\">";
        // line 80
        echo ($context["entry_password"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"password\" value=\"";
        // line 82
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\" autocomplete=\"off\"/>
              ";
        // line 83
        if (($context["error_password"] ?? null)) {
            // line 84
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_password"] ?? null);
            echo "</div>
              ";
        }
        // line 86
        echo "            </div>
          </div>
          <div class=\"form-group row required\">
            <label class=\"col-sm-2 col-form-label\" for=\"input-confirm\">";
        // line 89
        echo ($context["entry_confirm"] ?? null);
        echo "</label>
            <div class=\"col-sm-10\">
              <input type=\"password\" name=\"confirm\" value=\"";
        // line 91
        echo ($context["confirm"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_confirm"] ?? null);
        echo "\" id=\"input-confirm\" class=\"form-control\"/>
              ";
        // line 92
        if (($context["error_confirm"] ?? null)) {
            // line 93
            echo "                <div class=\"invalid-tooltip\">";
            echo ($context["error_confirm"] ?? null);
            echo "</div>
              ";
        }
        // line 95
        echo "            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
";
        // line 102
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "common/profile.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 102,  269 => 95,  263 => 93,  261 => 92,  255 => 91,  250 => 89,  245 => 86,  239 => 84,  237 => 83,  231 => 82,  226 => 80,  217 => 74,  213 => 73,  204 => 71,  198 => 68,  193 => 65,  187 => 63,  185 => 62,  179 => 61,  174 => 59,  169 => 56,  163 => 54,  161 => 53,  155 => 52,  150 => 50,  145 => 47,  139 => 45,  137 => 44,  131 => 43,  126 => 41,  121 => 38,  115 => 36,  113 => 35,  107 => 34,  102 => 32,  97 => 30,  92 => 28,  89 => 27,  81 => 23,  78 => 22,  70 => 18,  68 => 17,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "common/profile.twig", "/var/www/html/vncrafts.com/admin/view/template/common/profile.twig");
    }
}
