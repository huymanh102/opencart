<?php

/* default/template/product/manufacturer_info.twig */
class __TwigTemplate_64fda1b609f1bb59b32129baa9160d2d9445b7a24c46d092f41b31b00a24077a extends Twig_Template
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
<div id=\"product-manufacturer\" class=\"container\">
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
  <div class=\"row\">";
        // line 8
        echo ($context["column_left"] ?? null);
        echo "
    ";
        // line 9
        if ((($context["column_left"] ?? null) && ($context["column_right"] ?? null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo ($context["class"] ?? null);
        echo "\">
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 19
        if (($context["products"] ?? null)) {
            // line 20
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 23
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-sm-block\"><i class=\"fa fa-exchange\"></i> ";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group btn-group-sm\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 28
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 29
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-sort\">";
            // line 35
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 39
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", array()) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 40
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 42
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                }
                // line 44
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 45
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-limit\">";
            // line 51
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 55
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", array()) == ($context["limit"] ?? null))) {
                    // line 56
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 58
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                }
                // line 60
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
            // line 66
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 67
                echo "            <div class=\"product-layout product-list col-12\">
              <div class=\"product-thumb\">
                <div class=\"image\"><a href=\"";
                // line 69
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\"><img src=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array());
                echo "\" alt=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" title=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "\" class=\"img-fluid\"/></a></div>
                <div>
                  <div class=\"caption\">
                    <h4><a href=\"";
                // line 72
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></h4>
                    <p>";
                // line 73
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</p>
                    ";
                // line 74
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 75
                    echo "                      <p class=\"price\">
                        ";
                    // line 76
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 77
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 79
                        echo "                          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</span>
                        ";
                    }
                    // line 81
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", array())) {
                        // line 82
                        echo "                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", array());
                        echo "</span>
                        ";
                    }
                    // line 84
                    echo "                      </p>
                    ";
                }
                // line 86
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", array())) {
                    // line 87
                    echo "                      <div class=\"rating\">
                        ";
                    // line 88
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 89
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 90
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 91
                    echo "                      </div>
                    ";
                }
                // line 93
                echo "                  </div>
                  <div class=\"button-group\">
                    <button type=\"button\" onclick=\"cart.add('";
                // line 95
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 96
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 97
                echo ($context["button_compare"] ?? null);
                echo "\" onclick=\"compare.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                  </div>
                </div>
              </div>
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 105
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 106
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 109
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"float-right\"><a href=\"";
            // line 111
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 114
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 115
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 117
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/manufacturer_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 117,  357 => 115,  352 => 114,  344 => 111,  338 => 109,  332 => 106,  328 => 105,  324 => 103,  310 => 97,  304 => 96,  296 => 95,  292 => 93,  288 => 91,  282 => 90,  275 => 89,  271 => 88,  268 => 87,  265 => 86,  261 => 84,  253 => 82,  250 => 81,  242 => 79,  236 => 77,  234 => 76,  231 => 75,  229 => 74,  225 => 73,  219 => 72,  207 => 69,  203 => 67,  199 => 66,  192 => 61,  186 => 60,  178 => 58,  170 => 56,  167 => 55,  163 => 54,  157 => 51,  149 => 45,  143 => 44,  135 => 42,  127 => 40,  124 => 39,  120 => 38,  114 => 35,  105 => 29,  101 => 28,  91 => 23,  86 => 20,  84 => 19,  80 => 18,  76 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/manufacturer_info.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/manufacturer_info.twig");
    }
}
