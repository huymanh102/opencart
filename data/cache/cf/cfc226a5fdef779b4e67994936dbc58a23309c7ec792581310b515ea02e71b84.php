<?php

/* default/template/product/compare.twig */
class __TwigTemplate_9f096e81bfe2d80fe8aa32941ca4679f760f9738eff58055c4da5459c5148533 extends Twig_Template
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
<div id=\"product-compare\" class=\"container\">
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
        echo "\">";
        echo ($context["content_top"] ?? null);
        echo "
      <h1>";
        // line 22
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      ";
        // line 23
        if (($context["products"] ?? null)) {
            // line 24
            echo "        <table class=\"table table-bordered\">
          <thead>
            <tr>
              <td colspan=\"";
            // line 27
            echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
            echo "\"><strong>";
            echo ($context["text_product"] ?? null);
            echo "</strong></td>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>";
            // line 32
            echo ($context["text_name"] ?? null);
            echo "</td>
              ";
            // line 33
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 34
                echo "                <td><a href=\"";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "href", array());
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                echo "</strong></a></td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo " </tr>
            <tr>
              <td>";
            // line 37
            echo ($context["text_image"] ?? null);
            echo "</td>
              ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 39
                echo "                <td class=\"text-center\">";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array())) {
                    echo " <img src=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "thumb", array());
                    echo "\" alt=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                    echo "\" title=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "name", array());
                    echo "\" class=\"img-thumbnail\"/> ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 40
            echo " </tr>
            <tr>
              <td>";
            // line 42
            echo ($context["text_price"] ?? null);
            echo "</td>
              ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 44
                echo "                <td>";
                if (twig_get_attribute($this->env, $this->source, $context["product"], "price", array())) {
                    // line 45
                    echo "                    ";
                    if ( !twig_get_attribute($this->env, $this->source, $context["product"], "special", array())) {
                        // line 46
                        echo "                      ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "
                    ";
                    } else {
                        // line 47
                        echo " <strike>";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "price", array());
                        echo "</strike> ";
                        echo twig_get_attribute($this->env, $this->source, $context["product"], "special", array());
                        echo "
                    ";
                    }
                    // line 49
                    echo "                  ";
                }
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 50
            echo " </tr>
            <tr>
              <td>";
            // line 52
            echo ($context["text_model"] ?? null);
            echo "</td>
              ";
            // line 53
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 54
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "model", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 55
            echo " </tr>
            <tr>
              <td>";
            // line 57
            echo ($context["text_manufacturer"] ?? null);
            echo "</td>
              ";
            // line 58
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 59
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "manufacturer", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo " </tr>
            <tr>
              <td>";
            // line 62
            echo ($context["text_availability"] ?? null);
            echo "</td>
              ";
            // line 63
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 64
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "availability", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo " </tr>
            ";
            // line 66
            if (($context["review_status"] ?? null)) {
                // line 67
                echo "              <tr>
                <td>";
                // line 68
                echo ($context["text_rating"] ?? null);
                echo "</td>
                ";
                // line 69
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                    // line 70
                    echo "                  <td class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                        // line 71
                        echo "                      ";
                        if ((twig_get_attribute($this->env, $this->source, $context["product"], "rating", array()) < $context["i"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-2x\"></i><i class=\"fa fa-star-o fa-stack-2x\"></i></span> ";
                        }
                        // line 72
                        echo "                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 73
                    echo "                    <br/>
                    ";
                    // line 74
                    echo twig_get_attribute($this->env, $this->source, $context["product"], "reviews", array());
                    echo "</td>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 75
                echo " </tr>
            ";
            }
            // line 77
            echo "            <tr>
              <td>";
            // line 78
            echo ($context["text_summary"] ?? null);
            echo "</td>
              ";
            // line 79
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 80
                echo "                <td class=\"description\">";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "description", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo " </tr>
            <tr>
              <td>";
            // line 83
            echo ($context["text_weight"] ?? null);
            echo "</td>
              ";
            // line 84
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 85
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "weight", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo " </tr>
            <tr>
              <td>";
            // line 88
            echo ($context["text_dimension"] ?? null);
            echo "</td>
              ";
            // line 89
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 90
                echo "                <td>";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "length", array());
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "width", array());
                echo " x ";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "height", array());
                echo "</td>
              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 91
            echo " </tr>
          </tbody>
          ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["attribute_groups"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 94
                echo "            <thead>
              <tr>
                <td colspan=\"";
                // line 96
                echo (twig_length_filter($this->env, ($context["products"] ?? null)) + 1);
                echo "\"><strong>";
                echo twig_get_attribute($this->env, $this->source, $context["attribute_group"], "name", array());
                echo "</strong></td>
              </tr>
            </thead>
            ";
                // line 99
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["key"] => $context["attribute"]) {
                    // line 100
                    echo "              <tbody>
                <tr>
                  <td>";
                    // line 102
                    echo twig_get_attribute($this->env, $this->source, $context["attribute"], "name", array());
                    echo "</td>
                  ";
                    // line 103
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
                    foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                        // line 104
                        echo "                    ";
                        if ((($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", array())) && is_array($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5) || $__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5 instanceof ArrayAccess ? ($__internal_7cd7461123377b8c9c1b6a01f46c7bbd94bd12e59266005df5e93029ddbc0ec5[$context["key"]] ?? null) : null)) {
                            // line 105
                            echo "                      <td> ";
                            echo (($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a = twig_get_attribute($this->env, $this->source, $context["product"], "attribute", array())) && is_array($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a) || $__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a instanceof ArrayAccess ? ($__internal_3e28b7f596c58d7729642bcf2acc6efc894803703bf5fa7e74cd8d2aa1f8c68a[$context["key"]] ?? null) : null);
                            echo "</td>
                    ";
                        } else {
                            // line 107
                            echo "                      <td></td>
                    ";
                        }
                        // line 109
                        echo "                  ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 110
                    echo "                </tr>
              </tbody>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 113
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 114
            echo "          <tr>
            <td></td>
            ";
            // line 116
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["products"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 117
                echo "              <td><button type=\"button\" id=\"button-confirm\" onclick=\"cart.add('";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "product_id", array());
                echo "', '";
                echo twig_get_attribute($this->env, $this->source, $context["product"], "minimum", array());
                echo "');\" class=\"btn btn-primary btn-block\">";
                echo ($context["button_cart"] ?? null);
                echo "</button>
                <a href=\"";
                // line 118
                echo twig_get_attribute($this->env, $this->source, $context["product"], "remove", array());
                echo "\" class=\"btn btn-danger btn-block\">";
                echo ($context["button_remove"] ?? null);
                echo "</a></td>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 119
            echo " </tr>
        </table>
      ";
        } else {
            // line 122
            echo "        <p>";
            echo ($context["text_no_results"] ?? null);
            echo "</p>
        <div class=\"buttons\">
          <div class=\"float-right\"><a href=\"";
            // line 124
            echo ($context["continue"] ?? null);
            echo "\" class=\"btn btn-light\">";
            echo ($context["button_continue"] ?? null);
            echo "</a></div>
        </div>
      ";
        }
        // line 127
        echo "      ";
        echo ($context["content_bottom"] ?? null);
        echo "</div>
    ";
        // line 128
        echo ($context["column_right"] ?? null);
        echo "</div>
</div>
";
        // line 130
        echo ($context["footer"] ?? null);
        echo " ";
    }

    public function getTemplateName()
    {
        return "default/template/product/compare.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  502 => 130,  497 => 128,  492 => 127,  484 => 124,  478 => 122,  473 => 119,  463 => 118,  454 => 117,  450 => 116,  446 => 114,  440 => 113,  432 => 110,  426 => 109,  422 => 107,  416 => 105,  413 => 104,  409 => 103,  405 => 102,  401 => 100,  397 => 99,  389 => 96,  385 => 94,  381 => 93,  377 => 91,  364 => 90,  360 => 89,  356 => 88,  352 => 86,  343 => 85,  339 => 84,  335 => 83,  331 => 81,  322 => 80,  318 => 79,  314 => 78,  311 => 77,  307 => 75,  299 => 74,  296 => 73,  290 => 72,  283 => 71,  278 => 70,  274 => 69,  270 => 68,  267 => 67,  265 => 66,  262 => 65,  253 => 64,  249 => 63,  245 => 62,  241 => 60,  232 => 59,  228 => 58,  224 => 57,  220 => 55,  211 => 54,  207 => 53,  203 => 52,  199 => 50,  190 => 49,  182 => 47,  176 => 46,  173 => 45,  170 => 44,  166 => 43,  162 => 42,  158 => 40,  141 => 39,  137 => 38,  133 => 37,  129 => 35,  118 => 34,  114 => 33,  110 => 32,  100 => 27,  95 => 24,  93 => 23,  89 => 22,  82 => 21,  79 => 20,  76 => 19,  73 => 18,  70 => 17,  67 => 16,  64 => 15,  62 => 14,  57 => 13,  49 => 9,  47 => 8,  44 => 7,  33 => 5,  29 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/product/compare.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/product/compare.twig");
    }
}
