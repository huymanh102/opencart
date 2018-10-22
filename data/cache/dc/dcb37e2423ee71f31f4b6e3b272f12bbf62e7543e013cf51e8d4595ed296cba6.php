<?php

/* extension/report/customer_transaction_info.twig */
class __TwigTemplate_568be4951b8d35deb4eea54444a504ee7d51e93061611b9c06aa14a7fa228565 extends Twig_Template
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
        echo "<div class=\"row\">
  <div id=\"filter-report\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 4
        echo ($context["text_filter"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-date-start\">";
        // line 7
        echo ($context["entry_date_start"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_start\" value=\"";
        // line 9
        echo ($context["filter_date_start"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_start"] ?? null);
        echo "\" id=\"input-date-start\" class=\"form-control\"/>
            <div class=\"input-group-append\">
              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
            </div>
          </div>
        </div>
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-customer\">";
        // line 16
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
        </div>
        <div class=\"form-group\">
          <label class=\"col-form-label\" for=\"input-date-end\">";
        // line 19
        echo ($context["entry_date_end"] ?? null);
        echo "</label>
          <div class=\"input-group date\">
            <input type=\"text\" name=\"filter_date_end\" value=\"";
        // line 21
        echo ($context["filter_date_end"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_date_end"] ?? null);
        echo "\" id=\"input-date-end\" class=\"form-control\"/>
            <div class=\"input-group-append\">
              <div class=\"input-group-text\"><i class=\"fas fa-calendar\"></i></div>
            </div>
          </div>
        </div>
        <div class=\"form-group text-right\">
          <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 28
        echo ($context["button_filter"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <div class=\"col-md-9 col-sm-12\">
    <div class=\"card\">
      <div class=\"card-header\"><i class=\"fas fa-chart-bar\"></i> ";
        // line 35
        echo ($context["heading_title"] ?? null);
        echo "</div>
      <div class=\"card-body\">
        <div class=\"table-responsive\">
          <table class=\"table table-bordered\">
            <thead>
              <tr>
                <td class=\"text-left\">";
        // line 41
        echo ($context["column_customer"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 42
        echo ($context["column_email"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 43
        echo ($context["column_customer_group"] ?? null);
        echo "</td>
                <td class=\"text-left\">";
        // line 44
        echo ($context["column_status"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 45
        echo ($context["column_total"] ?? null);
        echo "</td>
                <td class=\"text-right\">";
        // line 46
        echo ($context["column_action"] ?? null);
        echo "</td>
              </tr>
            </thead>
            <tbody>
              ";
        // line 50
        if (($context["customers"] ?? null)) {
            // line 51
            echo "                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 52
                echo "                  <tr>
                    <td class=\"text-left\">";
                // line 53
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 54
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "email", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer_group", array());
                echo "</td>
                    <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "status", array());
                echo "</td>
                    <td class=\"text-right\">";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "total", array());
                echo "</td>
                    <td class=\"text-right\"><a href=\"";
                // line 58
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", array());
                echo "\" data-toggle=\"tooltip\" title=\"";
                echo ($context["button_edit"] ?? null);
                echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a></td>
                  </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "              ";
        } else {
            // line 62
            echo "                <tr>
                  <td class=\"text-center\" colspan=\"6\">";
            // line 63
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                </tr>
              ";
        }
        // line 66
        echo "            </tbody>
          </table>
        </div>
        <div class=\"row\">
          <div class=\"col-sm-6 text-left\">";
        // line 70
        echo ($context["pagination"] ?? null);
        echo "</div>
          <div class=\"col-sm-6 text-right\">";
        // line 71
        echo ($context["results"] ?? null);
        echo "</div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type=\"text/javascript\"><!--
\$('#button-filter').on('click', function() {
\tvar url = '';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_date_start = \$('input[name=\\'filter_date_start\\']').val();

\tif (filter_date_start) {
\t\turl += '&filter_date_start=' + encodeURIComponent(filter_date_start);
\t}

\tvar filter_date_end = \$('input[name=\\'filter_date_end\\']').val();

\tif (filter_date_end) {
\t\turl += '&filter_date_end=' + encodeURIComponent(filter_date_end);
\t}

\tlocation = 'index.php?route=report/report&code=customer_transaction&user_token=";
        // line 99
        echo ($context["user_token"] ?? null);
        echo "' + url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\t'format': 'YYYY-MM-DD',
\t'locale': '";
        // line 105
        echo ($context["datepicker"] ?? null);
        echo "',
\t'allowInputToggle': true
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 113
        echo ($context["user_token"] ?? null);
        echo "&filter_name=' + encodeURIComponent(request),
\t\t\tdataType: 'json',
\t\t\tsuccess: function(json) {
\t\t\t\tresponse(\$.map(json, function(item) {
\t\t\t\t\treturn {
\t\t\t\t\t\tlabel: item['name'],
\t\t\t\t\t\tvalue: item['customer_id']
\t\t\t\t\t}
\t\t\t\t}));
\t\t\t}
\t\t});
\t},
\t'select': function(item) {
\t\t\$('input[name=\\'filter_customer\\']').val(item['label']);
\t}
});
//--></script>";
    }

    public function getTemplateName()
    {
        return "extension/report/customer_transaction_info.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  238 => 113,  227 => 105,  218 => 99,  187 => 71,  183 => 70,  177 => 66,  171 => 63,  168 => 62,  165 => 61,  154 => 58,  150 => 57,  146 => 56,  142 => 55,  138 => 54,  134 => 53,  131 => 52,  126 => 51,  124 => 50,  117 => 46,  113 => 45,  109 => 44,  105 => 43,  101 => 42,  97 => 41,  88 => 35,  78 => 28,  66 => 21,  61 => 19,  51 => 16,  39 => 9,  34 => 7,  28 => 4,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "extension/report/customer_transaction_info.twig", "/var/www/html/vncrafts.com/admin/view/template/extension/report/customer_transaction_info.twig");
    }
}
