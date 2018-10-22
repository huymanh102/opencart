<?php

/* default/template/account/wishlist.twig */
class __TwigTemplate_0f9da38780b476fecd460e0c0ec66372f4a2fcc3559af930b02eefcfcbe8d5bf extends Twig_Template
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
<div id=\"account-wishlist\" class=\"container\">
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
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 14
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 22
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 23
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 24
        if (($context["products"] ?? null)) {
            // line 25
            echo "        <div class=\"table-responsive\">
          <table class=\"table table-bordered table-hover\">
            <thead>
              <tr>
                <td class=\"text-center\">";
            // line 29
            echo ($context["column_image"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 30
            echo ($context["column_name"] ?? null);
            echo "</td>
                <td class=\"text-left\">";
            // line 31
            echo ($context["column_model"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 32
            echo ($context["column_stock"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 33
            echo ($context["column_price"] ?? null);
            echo "</td>
                <td class=\"text-right\">";
            // line 34
            echo ($context["column_action"] ?? null);
            echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "                <tr>
                  <td class=\"text-center\">";
                // line 40
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array())) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                    echo "\"><img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                    echo "\"/></a>";
                }
                echo "</td>
                  <td class=\"text-left\"><a href=\"";
                // line 41
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></td>
                  <td class=\"text-left\">";
                // line 42
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", array());
                echo "</td>
                  <td class=\"text-right\">";
                // line 43
                echo twig_get_attribute($this->env, $this->source, $context["product"], "stock", array());
                echo "</td>
                  <td class=\"text-right\">
                    ";
                // line 45
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 46
                    echo "                      <div class=\"price\">
                        ";
                    // line 47
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 48
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 50
                        echo "                          <b>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</b> <s>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</s>
                        ";
                    }
                    // line 52
                    echo "                      </div>
                    ";
                }
                // line 53
                echo "</td>
                  <td class=\"text-right\"><button type=\"button\" onclick=\"cart.add('";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_cart"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fa fa-shopping-cart\"></i></button>
                    <a href=\"";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_remove"] ?? null);
                echo "\" class=\"btn btn-danger\"><i class=\"fa fa-times\"></i></a></td>
                </tr>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 58
            echo "            </tbody>
          </table>
        </div>
      ";
        } else {
            // line 62
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 64
        echo "      <div class=\"buttons clearfix\">
        <div class=\"float-right\"><a href=\"";
        // line 65
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_continue"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 67
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 69
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 72
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/account/wishlist.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  244 => 72,  238 => 69,  233 => 67,  226 => 65,  223 => 64,  217 => 62,  211 => 58,  200 => 55,  194 => 54,  191 => 53,  187 => 52,  179 => 50,  173 => 48,  171 => 47,  168 => 46,  166 => 45,  161 => 43,  157 => 42,  151 => 41,  137 => 40,  134 => 39,  130 => 38,  123 => 34,  119 => 33,  115 => 32,  111 => 31,  107 => 30,  103 => 29,  97 => 25,  95 => 24,  91 => 23,  87 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  62 => 14,  57 => 13,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/account/wishlist.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/account/wishlist.twig");
    }
}
