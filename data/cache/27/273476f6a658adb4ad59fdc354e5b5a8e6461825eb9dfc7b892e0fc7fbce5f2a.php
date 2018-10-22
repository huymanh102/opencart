<?php

/* default/template/product/category.twig */
class __TwigTemplate_80b76c4e992c7b3a97f2ac62244da6eb4e13a48bb75b4597739d39c75921ffab extends Twig_Template
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
<div id=\"product-category\" class=\"container\">
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
            $context["class"] = "col-lg-6";
            // line 11
            echo "    ";
        } elseif ((($context["column_left"] ?? null) || ($context["column_right"] ?? null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-lg-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-12";
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
        if ((($context["thumb"] ?? null) || ($context["description"] ?? null))) {
            // line 19
            echo "        <div class=\"row\"> ";
            if (($context["thumb"] ?? null)) {
                // line 20
                echo "            <div class=\"col-sm-2\"><img src=\"";
                echo ($context["thumb"] ?? null);
                echo "\" alt=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" title=\"";
                echo ($context["heading_title"] ?? null);
                echo "\" class=\"img-thumbnail\"/></div>
          ";
            }
            // line 22
            echo "          ";
            if (($context["description"] ?? null)) {
                // line 23
                echo "            <div class=\"col-sm-10\">";
                echo ($context["description"] ?? null);
                echo "</div>
          ";
            }
            // line 24
            echo "</div>
        <hr>
      ";
        }
        // line 27
        echo "      ";
        if (($context["categories"] ?? null)) {
            // line 28
            echo "        <h3>";
            echo ($context["text_refine"] ?? null);
            echo "</h3>
        ";
            // line 29
            if ((twig_length_filter($this->env, ($context["categories"] ?? null)) <= 5)) {
                // line 30
                echo "          <div class=\"row\">
            <div class=\"col-sm-3\">
              <ul>
                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 34
                    echo "                  <li><a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["category"], "name", array());
                    echo "</a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "              </ul>
            </div>
          </div>
        ";
            } else {
                // line 40
                echo "          <div class=\"row\">
            ";
                // line 41
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_array_batch(($context["categories"] ?? null), twig_round((twig_length_filter($this->env, ($context["categories"] ?? null)) / 4), 1, "ceil")));
                foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                    // line 42
                    echo "              <div class=\"col-sm-3\">
                <ul>
                  ";
                    // line 44
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["category"]);
                    foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                        // line 45
                        echo "                    <li><a href=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "href", array());
                        echo "\">";
                        echo twig_get_attribute($this->env, $this->source, $context["child"], "name", array());
                        echo "</a></li>
                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 47
                    echo "                </ul>
              </div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 50
                echo "          </div>
          <br/>
        ";
            }
            // line 53
            echo "      ";
        }
        // line 54
        echo "      ";
        if (($context["products"] ?? null)) {
            // line 55
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 58
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary d-block d-sm-block\"><i class=\"fa fa-exchange\"></i> <span class=\"d-none d-sm-inline\">";
            echo ($context["text_compare"] ?? null);
            echo "</span></a>
            </div>
          </div>
          <div class=\"col-md-1 d-none d-md-block\">
            <div class=\"btn-group btn-group-sm\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 63
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 64
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-sort\">";
            // line 70
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 73
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 74
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", array()) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 75
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 77
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                }
                // line 79
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 80
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-limit\">";
            // line 86
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 90
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", array()) == ($context["limit"] ?? null))) {
                    // line 91
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 93
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                }
                // line 95
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 96
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
            // line 101
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 102
                echo "            <div class=\"product-layout product-list col-12\">
              <div class=\"product-thumb\">
                <div class=\"image\"><a href=\"";
                // line 104
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
                // line 107
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></h4>
                    <p>";
                // line 108
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</p>
                    ";
                // line 109
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 110
                    echo "                      <p class=\"price\"> ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 111
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 112
                        echo " <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 113
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                    ";
                }
                // line 115
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", array())) {
                    // line 116
                    echo "                      <div class=\"rating\">
                        ";
                    // line 117
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 118
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>";
                        }
                        // line 119
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 120
                    echo "                      </div>
                    ";
                }
                // line 122
                echo "                  </div>
                  <div class=\"button-group\">
                    <button type=\"button\" onclick=\"cart.add('";
                // line 124
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 125
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"";
                // line 126
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
            // line 132
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 134
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 135
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        }
        // line 138
        echo "      ";
        if (( !($context["categories"] ?? null) &&  !($context["products"] ?? null))) {
            // line 139
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"float-right\"><a href=\"";
            // line 141
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 144
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 146
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
";
        // line 149
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/category.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  467 => 149,  461 => 146,  455 => 144,  447 => 141,  441 => 139,  438 => 138,  432 => 135,  428 => 134,  424 => 132,  410 => 126,  404 => 125,  396 => 124,  392 => 122,  388 => 120,  382 => 119,  375 => 118,  371 => 117,  368 => 116,  365 => 115,  353 => 113,  346 => 112,  340 => 111,  337 => 110,  335 => 109,  331 => 108,  325 => 107,  313 => 104,  309 => 102,  305 => 101,  298 => 96,  292 => 95,  284 => 93,  276 => 91,  273 => 90,  269 => 89,  263 => 86,  255 => 80,  249 => 79,  241 => 77,  233 => 75,  230 => 74,  226 => 73,  220 => 70,  211 => 64,  207 => 63,  197 => 58,  192 => 55,  189 => 54,  186 => 53,  181 => 50,  173 => 47,  162 => 45,  158 => 44,  154 => 42,  150 => 41,  147 => 40,  141 => 36,  130 => 34,  126 => 33,  121 => 30,  119 => 29,  114 => 28,  111 => 27,  106 => 24,  100 => 23,  97 => 22,  87 => 20,  84 => 19,  82 => 18,  78 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/category.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/category.twig");
    }
}
