<?php

/* default/template/product/special.twig */
class __TwigTemplate_6bfcfc6cba97c4e117f4e5251f935dbaf565161318be5f914a6a229e0c7dc06e extends Twig_Template
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
<div id=\"product-search\" class=\"container\">
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
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h2>";
        // line 17
        echo ($context["heading_title"] ?? null);
        echo "</h2>
      ";
        // line 18
        if (($context["products"] ?? null)) {
            // line 19
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

          <div class=\"col-md-1 d-none d-sm-none d-md-block\">
            <div class=\"btn-group btn-group-sm\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 29
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 30
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>



          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-sort\">";
            // line 39
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 43
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", array()) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 44
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 46
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                }
                // line 48
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-limit\">";
            // line 55
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 59
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", array()) == ($context["limit"] ?? null))) {
                    // line 60
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 62
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                }
                // line 64
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
            // line 70
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 71
                echo "            <div class=\"product-layout product-list col-12\">
              <div class=\"product-thumb\">
                <div class=\"image\"><a href=\"";
                // line 73
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
                // line 76
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></h4>
                    <p>";
                // line 77
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</p>
                    ";
                // line 78
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 79
                    echo "                      <p class=\"price\">
                        ";
                    // line 80
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 81
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 83
                        echo "                          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</span>
                        ";
                    }
                    // line 85
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", array());
                        echo "</span>
                        ";
                    }
                    // line 87
                    echo "                      </p>
                    ";
                }
                // line 89
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", array())) {
                    // line 90
                    echo "                      <div class=\"rating\">
                        ";
                    // line 91
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 92
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["i"])) {
                            // line 93
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 95
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 97
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 98
                    echo "                      </div>
                    ";
                }
                // line 100
                echo "                  </div>
                  <div class=\"button-group\">
                    <button type=\"button\" onclick=\"cart.add('";
                // line 102
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 103
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 104
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
            // line 110
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 112
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 113
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 116
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"float-right\"><a href=\"";
            // line 118
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 121
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 123
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 126
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/special.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  370 => 126,  364 => 123,  358 => 121,  350 => 118,  344 => 116,  338 => 113,  334 => 112,  330 => 110,  316 => 104,  310 => 103,  302 => 102,  298 => 100,  294 => 98,  288 => 97,  284 => 95,  280 => 93,  277 => 92,  273 => 91,  270 => 90,  267 => 89,  263 => 87,  253 => 85,  245 => 83,  239 => 81,  237 => 80,  234 => 79,  232 => 78,  228 => 77,  222 => 76,  210 => 73,  206 => 71,  202 => 70,  195 => 65,  189 => 64,  181 => 62,  173 => 60,  170 => 59,  166 => 58,  160 => 55,  152 => 49,  146 => 48,  138 => 46,  130 => 44,  127 => 43,  123 => 42,  117 => 39,  105 => 30,  101 => 29,  90 => 23,  84 => 19,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/special.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/special.twig");
    }
}
