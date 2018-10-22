<?php

/* default/template/checkout/cart.twig */
class __TwigTemplate_feaa9a6773c4eb874c89886515ddc4db7c97e2b787a6f06ca18695d55aa8c7e5 extends Twig_Template
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
<div id=\"checkout-cart\" class=\"container\">
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
        if (($context["attention"] ?? null)) {
            // line 9
            echo "    <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo ($context["attention"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  ";
        if (($context["success"] ?? null)) {
            // line 14
            echo "    <div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 18
        echo "  ";
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 23
        echo "  <div class=\"row\">";
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 24
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 25
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 26
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 27
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 28
            echo "    ";
        } else {
            // line 29
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 30
            echo "    ";
        }
        // line 31
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 32
        echo ($context["heading_title"] ?? null);
        echo "
        ";
        // line 33
        if (($context["weight"] ?? null)) {
            // line 34
            echo "          &nbsp;(";
            echo ($context["weight"] ?? null);
            echo ")
        ";
        }
        // line 35
        echo " </h1>
      <form action=\"";
        // line 36
        echo ($context["action"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-center\">";
        // line 41
        echo ($context["column_image"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 42
        echo ($context["column_name"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        echo ($context["column_model"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        echo ($context["column_quantity"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo ($context["column_price"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 46
        echo ($context["column_total"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
            // line 51
            echo "                <tr>
                  <td class=\"text-center\">";
            // line 52
            if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array())) {
                echo " <a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array());
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" class=\"img-thumbnail\"/></a> ";
            }
            echo "</td>
                  <td class=\"text-left\"><a href=\"";
            // line 53
            echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
            echo "\">";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
            echo "</a> ";
            if ( !twig_get_attribute($this->env, $this->source, $context["product"], "stock", array())) {
                echo " <span class=\"text-danger\">***</span> ";
            }
            // line 54
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "option", array())) {
                // line 55
                echo "                      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["product"], "option", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                    // line 56
                    echo "                        <br/>
                        <small>";
                    // line 57
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "name", array());
                    echo ": ";
                    echo twig_get_attribute($this->env, $this->source, $context["option"], "value", array());
                    echo "</small>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                    ";
            }
            // line 60
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "reward", array())) {
                // line 61
                echo "                      <br/>
                      <small>";
                // line 62
                echo twig_get_attribute($this->env, $this->source, $context["product"], "reward", array());
                echo "</small>
                    ";
            }
            // line 64
            echo "                    ";
            if (twig_get_attribute($this->env, $this->source, $context["product"], "recurring", array())) {
                // line 65
                echo "                      <br/>
                      <span class=\"label label-info\">";
                // line 66
                echo ($context["text_recurring_item"] ?? null);
                echo "</span>
                      <small>";
                // line 67
                echo twig_get_attribute($this->env, $this->source, $context["product"], "recurring", array());
                echo "</small>
                    ";
            }
            // line 68
            echo "</td>
                  <td class=\"text-left\">";
            // line 69
            echo twig_get_attribute($this->env, $this->source, $context["product"], "model", array());
            echo "</td>
                  <td class=\"text-left\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"quantity[";
            // line 72
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", array());
            echo "]\" value=\"";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "quantity", array());
            echo "\" size=\"1\" class=\"form-control\">
                      <div class=\"input-group-append\">
                        <button type=\"submit\" data-toggle=\"tooltip\" title=\"";
            // line 74
            echo ($context["button_update"] ?? null);
            echo "\" class=\"btn btn-primary\"><i class=\"fa fa-refresh\"></i></button>
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 75
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"cart.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["product"], "cart_id", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                      </div>
                    </div>
                  </td>
                  <td class=\"text-right\">";
            // line 79
            echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
            echo "</td>
                  <td class=\"text-right\">";
            // line 80
            echo twig_get_attribute($this->env, $this->source, $context["product"], "total", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        echo "              ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["vouchers"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["voucher"]) {
            // line 84
            echo "                <tr>
                  <td></td>
                  <td class=\"text-left\">";
            // line 86
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "description", array());
            echo "</td>
                  <td class=\"text-left\"></td>
                  <td class=\"text-left\">
                    <div class=\"input-group\">
                      <input type=\"text\" name=\"\" value=\"1\" size=\"1\" disabled=\"disabled\" class=\"form-control\"/>
                      <div class=\"input-group-append\">
                        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
            // line 92
            echo ($context["button_remove"] ?? null);
            echo "\" class=\"btn btn-danger\" onclick=\"voucher.remove('";
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "key", array());
            echo "');\"><i class=\"fa fa-times-circle\"></i></button>
                      </div>
                    </div>
                  </td>
                  <td class=\"text-right\">";
            // line 96
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", array());
            echo "</td>
                  <td class=\"text-right\">";
            // line 97
            echo twig_get_attribute($this->env, $this->source, $context["voucher"], "amount", array());
            echo "</td>
                </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['voucher'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 100
        echo "            </tbody>
          </table>
        </div>
      </form>
      ";
        // line 104
        if (($context["modules"] ?? null)) {
            // line 105
            echo "        <h2>";
            echo ($context["text_next"] ?? null);
            echo "</h2>
        <p>";
            // line 106
            echo ($context["text_next_choice"] ?? null);
            echo "</p>
        <div id=\"accordion\">
          ";
            // line 108
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["modules"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
                // line 109
                echo "            ";
                echo $context["module"];
                echo "
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 111
            echo "        </div>
      ";
        }
        // line 113
        echo "      <br/>
      <div class=\"row\">
        <div class=\"col-md-4 offset-md-8\">
          <table class=\"table table-bordered\">
            ";
        // line 117
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["totals"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["total"]) {
            // line 118
            echo "              <tr>
                <td class=\"text-right\"><strong>";
            // line 119
            echo twig_get_attribute($this->env, $this->source, $context["total"], "title", array());
            echo ":</strong></td>
                <td class=\"text-right\">";
            // line 120
            echo twig_get_attribute($this->env, $this->source, $context["total"], "text", array());
            echo "</td>
              </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['total'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 123
        echo "          </table>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"float-left\"><a href=\"";
        // line 127
        echo ($context["continue"] ?? null);
        echo "\" class=\"btn btn-light\">";
        echo ($context["button_shopping"] ?? null);
        echo "</a></div>
        <div class=\"float-right\"><a href=\"";
        // line 128
        echo ($context["checkout"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_checkout"] ?? null);
        echo "</a></div>
      </div>
      ";
        // line 130
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 131
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 133
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/cart.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  411 => 133,  406 => 131,  402 => 130,  395 => 128,  389 => 127,  383 => 123,  374 => 120,  370 => 119,  367 => 118,  363 => 117,  357 => 113,  353 => 111,  344 => 109,  340 => 108,  335 => 106,  330 => 105,  328 => 104,  322 => 100,  313 => 97,  309 => 96,  300 => 92,  291 => 86,  287 => 84,  282 => 83,  273 => 80,  269 => 79,  260 => 75,  256 => 74,  249 => 72,  243 => 69,  240 => 68,  235 => 67,  231 => 66,  228 => 65,  225 => 64,  220 => 62,  217 => 61,  214 => 60,  211 => 59,  201 => 57,  198 => 56,  193 => 55,  190 => 54,  182 => 53,  168 => 52,  165 => 51,  161 => 50,  154 => 46,  150 => 45,  146 => 44,  142 => 43,  138 => 42,  134 => 41,  126 => 36,  123 => 35,  117 => 34,  115 => 33,  111 => 32,  104 => 31,  101 => 30,  98 => 29,  95 => 28,  92 => 27,  89 => 26,  86 => 25,  84 => 24,  79 => 23,  71 => 19,  68 => 18,  60 => 14,  57 => 13,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/checkout/cart.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/checkout/cart.twig");
    }
}
