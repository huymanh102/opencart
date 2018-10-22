<?php

/* default/template/product/search.twig */
class __TwigTemplate_6aaec67aeca942204420e11d29688bd19c0f55404ac2a3c3dde3f90f684cc8d1 extends Twig_Template
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
        echo "\">
      ";
        // line 17
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 18
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <label class=\"col-form-label\" for=\"input-search\">";
        // line 19
        echo ($context["entry_search"] ?? null);
        echo "</label>
      <div class=\"row\">
        <div class=\"col-md-4\">
          <input type=\"text\" name=\"search\" value=\"";
        // line 22
        echo ($context["search"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["text_keyword"] ?? null);
        echo "\" id=\"input-search\" class=\"form-control\"/>
        </div>
        <div class=\"col-md-3\">
          <select name=\"category_id\" class=\"form-control\">
            <option value=\"0\">";
        // line 26
        echo ($context["text_category"] ?? null);
        echo "</option>
            ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["categories"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["category_1"]) {
            // line 28
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", array()) == ($context["category_id"] ?? null))) {
                // line 29
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", array());
                echo "</option>
              ";
            } else {
                // line 31
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "category_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["category_1"], "name", array());
                echo "</option>
              ";
            }
            // line 33
            echo "              ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_1"], "children", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["category_2"]) {
                // line 34
                echo "                ";
                if ((twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", array()) == ($context["category_id"] ?? null))) {
                    // line 35
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", array());
                    echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", array());
                    echo "</option>
                ";
                } else {
                    // line 37
                    echo "                  <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "category_id", array());
                    echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                    echo twig_get_attribute($this->env, $this->source, $context["category_2"], "name", array());
                    echo "</option>
                ";
                }
                // line 39
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["category_2"], "children", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["category_3"]) {
                    // line 40
                    echo "                  ";
                    if ((twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", array()) == ($context["category_id"] ?? null))) {
                        // line 41
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", array());
                        echo "\" selected=\"selected\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", array());
                        echo "</option>
                  ";
                    } else {
                        // line 43
                        echo "                    <option value=\"";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "category_id", array());
                        echo "\">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
                        echo twig_get_attribute($this->env, $this->source, $context["category_3"], "name", array());
                        echo "</option>
                  ";
                    }
                    // line 45
                    echo "                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_3'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category_1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "          </select>
        </div>
        <div class=\"col-md-3\">
          <div class=\"form-check form-check-inline\">
            <div class=\"form-check-input\">
              ";
        // line 53
        if (($context["sub_category"] ?? null)) {
            // line 54
            echo "                <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\" checked=\"checked\"/>
              ";
        } else {
            // line 56
            echo "                <input type=\"checkbox\" name=\"sub_category\" value=\"1\" id=\"input-sub-category\" class=\"form-check-input\"/>
              ";
        }
        // line 58
        echo "            </div>
            <label class=\"form-check-label\" for=\"input-sub-category\">";
        // line 59
        echo ($context["text_sub_category"] ?? null);
        echo "</label>
          </div>
        </div>
      </div>
      <div class=\"form-check mb-3\">
        ";
        // line 64
        if (($context["description"] ?? null)) {
            // line 65
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\" checked=\"checked\"/>
        ";
        } else {
            // line 67
            echo "          <input type=\"checkbox\" name=\"description\" value=\"1\" id=\"input-description\" class=\"form-check-input\"/>
        ";
        }
        // line 69
        echo "        <label class=\"form-check-label\" for=\"input-description\">";
        echo ($context["entry_description"] ?? null);
        echo "</label>
      </div>
      <button type=\"button\" id=\"button-search\" class=\"btn btn-primary\">";
        // line 71
        echo ($context["button_search"] ?? null);
        echo "</button>
      <hr/>
      <h2>";
        // line 73
        echo ($context["text_search"] ?? null);
        echo "</h2>
      ";
        // line 74
        if (($context["products"] ?? null)) {
            // line 75
            echo "        <div id=\"display-control\" class=\"row\">
          <div class=\"col-md-1 d-none d-sm-none d-md-block\">
            <div class=\"btn-group btn-group-sm\">
              <button type=\"button\" id=\"list-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 78
            echo ($context["button_list"] ?? null);
            echo "\"><i class=\"fa fa-th-list\"></i></button>
              <button type=\"button\" id=\"grid-view\" class=\"btn btn-light\" data-toggle=\"tooltip\" title=\"";
            // line 79
            echo ($context["button_grid"] ?? null);
            echo "\"><i class=\"fa fa-th\"></i></button>
            </div>
          </div>
          <div class=\"col-md-3\">
            <div class=\"mb-3\">
              <a href=\"";
            // line 84
            echo ($context["compare"] ?? null);
            echo "\" id=\"compare-total\" class=\"btn btn-primary btn-block\"><i class=\"fa fa-sliders\"></i> ";
            echo ($context["text_compare"] ?? null);
            echo "</a>
            </div>
          </div>
          <div class=\"col-md-4 offset-md-1 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-sort\">";
            // line 90
            echo ($context["text_sort"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-sort\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["sorts"]);
            foreach ($context['_seq'] as $context["_key"] => $context["sorts"]) {
                // line 94
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["sorts"], "value", array()) == sprintf("%s-%s", ($context["sort"] ?? null), ($context["order"] ?? null)))) {
                    // line 95
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 97
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["sorts"], "text", array());
                    echo "</option>
                  ";
                }
                // line 99
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sorts'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 100
            echo "              </select>
            </div>
          </div>
          <div class=\"col-md-3 col-6\">
            <div class=\"input-group input-group-sm mb-3\">
              <div class=\"input-group-prepend\">
                <label class=\"input-group-text\" for=\"input-limit\">";
            // line 106
            echo ($context["text_limit"] ?? null);
            echo "</label>
              </div>
              <select id=\"input-limit\" class=\"form-control\" onchange=\"location = this.value;\">
                ";
            // line 109
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["limits"]);
            foreach ($context['_seq'] as $context["_key"] => $context["limits"]) {
                // line 110
                echo "                  ";
                if ((twig_get_attribute($this->env, $this->source, $context["limits"], "value", array()) == ($context["limit"] ?? null))) {
                    // line 111
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\" selected=\"selected\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                } else {
                    // line 113
                    echo "                    <option value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "href", array());
                    echo "\">";
                    echo twig_get_attribute($this->env, $this->source, $context["limits"], "text", array());
                    echo "</option>
                  ";
                }
                // line 115
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['limits'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            echo "              </select>
            </div>
          </div>
        </div>
        <div class=\"row\">
          ";
            // line 121
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 122
                echo "            <div class=\"product-layout product-list col-12\">
              <div class=\"product-thumb\">
                <div class=\"image\"><a href=\"";
                // line 124
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
                // line 127
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</a></h4>
                    <p>";
                // line 128
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</p>
                    ";
                // line 129
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 130
                    echo "                      <p class=\"price\">
                        ";
                    // line 131
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 132
                        echo "                          ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                        ";
                    } else {
                        // line 134
                        echo "                          <span class=\"price-new\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</span>
                        ";
                    }
                    // line 136
                    echo "                        ";
                    if (twig_get_attribute($this->env, $this->source, $context["product"], "tax", array())) {
                        // line 137
                        echo "                          <span class=\"price-tax\">";
                        echo ($context["text_tax"] ?? null);
                        echo " ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "tax", array());
                        echo "</span>
                        ";
                    }
                    // line 139
                    echo "                      </p>
                    ";
                }
                // line 141
                echo "                    ";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "rating", array())) {
                    // line 142
                    echo "                      <div class=\"rating\">
                        ";
                    // line 143
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 144
                        echo "                          ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["i"])) {
                            // line 145
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        } else {
                            // line 147
                            echo "                            <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span>
                          ";
                        }
                        // line 149
                        echo "                        ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 150
                    echo "                      </div>
                    ";
                }
                // line 152
                echo "                  </div>
                  <div class=\"button-group\">
                    <button type=\"button\" onclick=\"cart.add('";
                // line 154
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\"><i class=\"fa fa-shopping-cart\"></i> <span class=\"d-none d-lg-inline\">";
                echo ($context["button_cart"] ?? null);
                echo "</span></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 155
                echo ($context["button_wishlist"] ?? null);
                echo "\" onclick=\"wishlist.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                    <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 156
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
            // line 162
            echo "        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
            // line 164
            echo ($context["pagination"] ?? null);
            echo "</div>
          <div class=\"col-sm-6 text-right\">";
            // line 165
            echo ($context["results"] ?? null);
            echo "</div>
        </div>
      ";
        } else {
            // line 168
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
      ";
        }
        // line 170
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "
    </div>
    ";
        // line 172
        echo ($context["column_right"] ?? null);
        echo "
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-search').bind('click', function() {
\turl = 'index.php?route=product/search';

\tvar search = \$('#content input[name=\\'search\\']').prop('value');

\tif (search) {
\t\turl += '&search=' + encodeURIComponent(search);
\t}

\tvar category_id = \$('#content select[name=\\'category_id\\']').prop('value');

\tif (category_id > 0) {
\t\turl += '&category_id=' + encodeURIComponent(category_id);
\t}

\tvar sub_category = \$('#content input[name=\\'sub_category\\']:checked').prop('value');

\tif (sub_category) {
\t\turl += '&sub_category=true';
\t}

\tvar filter_description = \$('#content input[name=\\'description\\']:checked').prop('value');

\tif (filter_description) {
\t\turl += '&description=true';
\t}

\tlocation = url;
});

\$('#content input[name=\\'search\\']').bind('keydown', function(e) {
\tif (e.keyCode == 13) {
\t\t\$('#button-search').trigger('click');
\t}
});

\$('select[name=\\'category_id\\']').on('change', function() {
\tif (this.value == '0') {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', true);
\t} else {
\t\t\$('input[name=\\'sub_category\\']').prop('disabled', false);
\t}
});

\$('select[name=\\'category_id\\']').trigger('change');
--></script>
";
        // line 222
        echo ($context["footer"] ?? null);
        echo "
";
    }

    public function getTemplateName()
    {
        return "default/template/product/search.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  568 => 222,  515 => 172,  509 => 170,  503 => 168,  497 => 165,  493 => 164,  489 => 162,  475 => 156,  469 => 155,  461 => 154,  457 => 152,  453 => 150,  447 => 149,  443 => 147,  439 => 145,  436 => 144,  432 => 143,  429 => 142,  426 => 141,  422 => 139,  414 => 137,  411 => 136,  403 => 134,  397 => 132,  395 => 131,  392 => 130,  390 => 129,  386 => 128,  380 => 127,  368 => 124,  364 => 122,  360 => 121,  353 => 116,  347 => 115,  339 => 113,  331 => 111,  328 => 110,  324 => 109,  318 => 106,  310 => 100,  304 => 99,  296 => 97,  288 => 95,  285 => 94,  281 => 93,  275 => 90,  264 => 84,  256 => 79,  252 => 78,  247 => 75,  245 => 74,  241 => 73,  236 => 71,  230 => 69,  226 => 67,  222 => 65,  220 => 64,  212 => 59,  209 => 58,  205 => 56,  201 => 54,  199 => 53,  192 => 48,  186 => 47,  180 => 46,  174 => 45,  166 => 43,  158 => 41,  155 => 40,  150 => 39,  142 => 37,  134 => 35,  131 => 34,  126 => 33,  118 => 31,  110 => 29,  107 => 28,  103 => 27,  99 => 26,  90 => 22,  84 => 19,  80 => 18,  76 => 17,  71 => 16,  68 => 15,  65 => 14,  62 => 13,  59 => 12,  56 => 11,  53 => 10,  51 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/search.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/search.twig");
    }
}
