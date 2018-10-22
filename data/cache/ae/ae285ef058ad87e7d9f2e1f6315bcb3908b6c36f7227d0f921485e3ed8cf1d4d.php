<?php

/* default/template/affiliate/login.twig */
class __TwigTemplate_f752e3e3e2c7f7c5d36eb1f388f029ec377e9fb24e781cd0bc38dbb9a677d140 extends Twig_Template
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
        echo "
<div id=\"affiliate-login\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  ";
        // line 8
        if (($context["success"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "</div>
  ";
        }
        // line 11
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 12
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "</div>
  ";
        }
        // line 14
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 15
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 16
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 17
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 18
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 19
            echo "    ";
        } else {
            // line 20
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 21
            echo "    ";
        }
        // line 22
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 24
        echo ($context["text_description"] ?? null);
        echo "
      <div class=\"row\">
        <div class=\"col-sm-6\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <h2>";
        // line 29
        echo ($context["text_new_affiliate"] ?? null);
        echo "</h2>
              <p>";
        // line 30
        echo ($context["text_register_account"] ?? null);
        echo "</p>
              <a class=\"btn btn-primary\" href=\"";
        // line 31
        echo ($context["register"] ?? null);
        echo "\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
          </div>
        </div>
        <div class=\"col-sm-6\">
          <div class=\"card mb-3\">
            <div class=\"card-body\">
              <h2>";
        // line 37
        echo ($context["text_returning_affiliate"] ?? null);
        echo "</h2>
              <p><strong>";
        // line 38
        echo ($context["text_i_am_returning_affiliate"] ?? null);
        echo "</strong></p>
              <form action=\"";
        // line 39
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
                <div class=\"form-group\">
                  <label class=\"col-form-label\" for=\"input-email\">";
        // line 41
        echo ($context["entry_email"] ?? null);
        echo "</label> <input type=\"text\" name=\"email\" value=\"";
        echo ($context["email"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_email"] ?? null);
        echo "\" id=\"input-email\" class=\"form-control\"/>
                </div>
                <div class=\"form-group\">
                  <label class=\"col-form-label\" for=\"input-password\">";
        // line 44
        echo ($context["entry_password"] ?? null);
        echo "</label> <input type=\"password\" name=\"password\" value=\"";
        echo ($context["password"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_password"] ?? null);
        echo "\" id=\"input-password\" class=\"form-control\"/> <a href=\"";
        echo ($context["forgotten"] ?? null);
        echo "\">";
        echo ($context["text_forgotten"] ?? null);
        echo "</a></div>
                <input type=\"submit\" value=\"";
        // line 45
        echo ($context["button_login"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
                ";
        // line 46
        if (($context["redirect"] ?? null)) {
            // line 47
            echo "                  <input type=\"hidden\" name=\"redirect\" value=\"";
            echo ($context["redirect"] ?? null);
            echo "\"/>
                ";
        }
        // line 49
        echo "              </form>
            </div>
          </div>
        </div>
      </div>
      ";
        // line 54
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 55
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 57
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/affiliate/login.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  190 => 57,  185 => 55,  181 => 54,  174 => 49,  168 => 47,  166 => 46,  162 => 45,  150 => 44,  140 => 41,  135 => 39,  131 => 38,  127 => 37,  116 => 31,  112 => 30,  108 => 29,  100 => 24,  96 => 23,  89 => 22,  86 => 21,  83 => 20,  80 => 19,  77 => 18,  74 => 17,  71 => 16,  69 => 15,  64 => 14,  58 => 12,  55 => 11,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/affiliate/login.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/affiliate/login.twig");
    }
}
