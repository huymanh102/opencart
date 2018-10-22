<?php

/* catalog/product_option_list.twig */
class __TwigTemplate_ae12d23b0809c5e0ce50a7ea6d29a2d5b500cf89a89d07c40d9b959fb0486b5e extends Twig_Template
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
      <div class=\"float-right\"><button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 5
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-product-option').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 6
        echo ($context["add"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_add"] ?? null);
        echo "\" class=\"btn btn-primary\"><i class=\"fas fa-plus\"></i></a>
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 7
        echo ($context["button_delete"] ?? null);
        echo "\" class=\"btn btn-danger\" onclick=\"confirm('";
        echo ($context["text_confirm"] ?? null);
        echo "') ? \$('#form-product-option').submit() : false;\"><i class=\"fas fa-trash-alt\"></i></button>
      </div>
      <h1>";
        // line 9
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 12
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
        // line 14
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    ";
        // line 18
        if (($context["error_warning"] ?? null)) {
            // line 19
            echo "      <div class=\"alert alert-danger alert-dismissible\"><i class=\"fas fa-exclamation-circle\"></i> ";
            echo ($context["error_warning"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 23
        echo "    ";
        if (($context["success"] ?? null)) {
            // line 24
            echo "      <div class=\"alert alert-success alert-dismissible\"><i class=\"fas fa-check-circle\"></i> ";
            echo ($context["success"] ?? null);
            echo "
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
      </div>
    ";
        }
        // line 28
        echo "    <div class=\"row\">
      <div id=\"filter-product-option\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 31
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-product\">";
        // line 34
        echo ($context["entry_product"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_product\" value=\"";
        echo ($context["filter_product"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_product"] ?? null);
        echo "\" id=\"input-product\" class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-option\">";
        // line 37
        echo ($context["entry_option"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_option\" value=\"";
        echo ($context["filter_option"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_option"] ?? null);
        echo "\" id=\"input-option\" class=\"form-control\"/>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 40
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 47
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <form action=\"";
        // line 49
        echo ($context["delete"] ?? null);
        echo "\" method=\"post\" enctype=\"multipart/form-data\" id=\"form-product-option\">
              <div class=\"table-responsive\">
                <table class=\"table table-bordered table-hover\">
                  <thead>
                    <tr>
                      <td style=\"width: 1px;\" class=\"text-center\"><input type=\"checkbox\" onclick=\"\$('input[name*=\\'selected\\']').trigger('click');\"/></td>
                      <td class=\"text-left\">";
        // line 55
        if ((($context["sort"] ?? null) == "pd.name")) {
            // line 56
            echo "                          <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 58
            echo "                          <a href=\"";
            echo ($context["sort_product"] ?? null);
            echo "\">";
            echo ($context["column_product"] ?? null);
            echo "</a>
                        ";
        }
        // line 59
        echo "</td>
                      <td class=\"text-left\">";
        // line 60
        if ((($context["sort"] ?? null) == "od.name")) {
            // line 61
            echo "                          <a href=\"";
            echo ($context["sort_option"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_option"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 63
            echo "                          <a href=\"";
            echo ($context["sort_option"] ?? null);
            echo "\">";
            echo ($context["column_option"] ?? null);
            echo "</a>
                        ";
        }
        // line 64
        echo "</td>
                      <td class=\"text-left\">";
        // line 65
        if ((($context["sort"] ?? null) == "o.type")) {
            // line 66
            echo "                          <a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 68
            echo "                          <a href=\"";
            echo ($context["sort_type"] ?? null);
            echo "\">";
            echo ($context["column_type"] ?? null);
            echo "</a>
                        ";
        }
        // line 69
        echo "</td>
                      <td class=\"text-right\">";
        // line 70
        if ((($context["sort"] ?? null) == "o.sort_order")) {
            // line 71
            echo "                          <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\" class=\"";
            echo twig_lower_filter($this->env, ($context["order"] ?? null));
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                        ";
        } else {
            // line 73
            echo "                          <a href=\"";
            echo ($context["sort_sort_order"] ?? null);
            echo "\">";
            echo ($context["column_sort_order"] ?? null);
            echo "</a>
                        ";
        }
        // line 74
        echo "</td>
                      <td class=\"text-right\">";
        // line 75
        echo ($context["column_action"] ?? null);
        echo "</td>
                    </tr>
                  </thead>
                  <tbody>
                    ";
        // line 79
        if (($context["product_options"] ?? null)) {
            // line 80
            echo "                      ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["product_options"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["product_option"]) {
                // line 81
                echo "                        <tr>
                          <td class=\"text-center\">";
                // line 82
                if (twig_in_filter(twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", array()), ($context["selected"] ?? null))) {
                    // line 83
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", array());
                    echo "\" checked=\"checked\"/>
                            ";
                } else {
                    // line 85
                    echo "                              <input type=\"checkbox\" name=\"selected[]\" value=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product_option_id", array());
                    echo "\"/>
                            ";
                }
                // line 86
                echo "</td>
                          <td class=\"text-left\">";
                // line 87
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "product", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 88
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "option", array());
                echo "</td>
                          <td class=\"text-left\">";
                // line 89
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "type", array());
                echo "</td>
                          <td class=\"text-right\">";
                // line 90
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "sort_order", array());
                echo "</td>
                          <td class=\"text-right\"><a href=\"";
                // line 91
                echo twig_get_attribute($this->env, $this->source, $context["product_option"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                        </tr>
                      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 94
            echo "                    ";
        } else {
            // line 95
            echo "                      <tr>
                        <td class=\"text-center\" colspan=\"5\">";
            // line 96
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                      </tr>
                    ";
        }
        // line 99
        echo "                  </tbody>
                </table>
              </div>
            </form>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 104
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 105
        echo ($context["results"] ?? null);
        echo "</div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_product = \$('input[name=\\'filter_product\\']').val();

\tif (filter_product) {
\t\turl += '&filter_product=' + encodeURIComponent(filter_product);
\t}

\tvar filter_option = \$('input[name=\\'filter_option\\']').val();

\tif (filter_option) {
\t\turl += '&filter_option=' + encodeURIComponent(filter_option);
\t}

\tlocation = 'index.php?route=catalog/product_option&user_token=";
        // line 129
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_product\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/product/autocomplete&user_token=";
        // line 136
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['product_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_product\\']').val(item['label']);
\t}
});

\$('input[name=\\'filter_option\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=catalog/option/autocomplete&user_token=";
        // line 156
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['option_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_option\\']').val(item['label']);
\t}
});
//--></script>
";
        // line 173
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "catalog/product_option_list.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  406 => 173,  386 => 156,  363 => 136,  353 => 129,  326 => 105,  322 => 104,  315 => 99,  309 => 96,  306 => 95,  303 => 94,  292 => 91,  288 => 90,  284 => 89,  280 => 88,  276 => 87,  273 => 86,  267 => 85,  261 => 83,  259 => 82,  256 => 81,  251 => 80,  249 => 79,  242 => 75,  239 => 74,  231 => 73,  221 => 71,  219 => 70,  216 => 69,  208 => 68,  198 => 66,  196 => 65,  193 => 64,  185 => 63,  175 => 61,  173 => 60,  170 => 59,  162 => 58,  152 => 56,  150 => 55,  141 => 49,  136 => 47,  126 => 40,  116 => 37,  106 => 34,  100 => 31,  95 => 28,  87 => 24,  84 => 23,  76 => 19,  74 => 18,  68 => 14,  57 => 12,  53 => 11,  48 => 9,  41 => 7,  35 => 6,  31 => 5,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "catalog/product_option_list.twig", "/var/www/html/vncrafts.com/admin/view/template/catalog/product_option_list.twig");
    }
}
