<?php

/* report/online.twig */
class __TwigTemplate_2f9b07a42cfe975629cdfc07ede15f6911e9634aec71d756a4a5dc18b4d09b43 extends Twig_Template
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
      <div class=\"float-right\">
        <button type=\"button\" data-toggle=\"tooltip\" title=\"";
        // line 6
        echo ($context["button_filter"] ?? null);
        echo "\" onclick=\"\$('#filter-online').toggleClass('d-none');\" class=\"btn btn-light d-md-none\"><i class=\"fas fa-filter\"></i></button>
        <a href=\"";
        // line 7
        echo ($context["refresh"] ?? null);
        echo "\" data-toggle=\"tooltip\" title=\"";
        echo ($context["button_refresh"] ?? null);
        echo "\" class=\"btn btn-light\"><i class=\"fas fa-sync\"></i></a></div>
      <h1>";
        // line 8
        echo ($context["heading_title"] ?? null);
        echo "</h1>
      <ol class=\"breadcrumb\">
        ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["breadcrumbs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 11
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
        // line 13
        echo "      </ol>
    </div>
  </div>
  <div class=\"container-fluid\">
    <div class=\"row\">
      <div id=\"filter-online\" class=\"col-md-3 col-sm-12 order-md-9 d-none d-md-block mb-3\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-filter\"></i> ";
        // line 20
        echo ($context["text_filter"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-ip\">";
        // line 23
        echo ($context["entry_ip"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_ip\" value=\"";
        echo ($context["filter_ip"] ?? null);
        echo "\" id=\"input-ip\" placeholder=\"";
        echo ($context["entry_ip"] ?? null);
        echo "\" i class=\"form-control\"/>
            </div>
            <div class=\"form-group\">
              <label class=\"col-form-label\" for=\"input-customer\">";
        // line 26
        echo ($context["entry_customer"] ?? null);
        echo "</label> <input type=\"text\" name=\"filter_customer\" value=\"";
        echo ($context["filter_customer"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_customer"] ?? null);
        echo "\" id=\"input-customer\" class=\"form-control\"/>
            </div>
            <div class=\"form-group text-right\">
              <button type=\"button\" id=\"button-filter\" class=\"btn btn-light\"><i class=\"fas fa-filter\"></i> ";
        // line 29
        echo ($context["button_filter"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
      <div class=\"col-md-9 col-sm-12\">
        <div class=\"card\">
          <div class=\"card-header\"><i class=\"fas fa-list\"></i> ";
        // line 36
        echo ($context["text_list"] ?? null);
        echo "</div>
          <div class=\"card-body\">
            <div class=\"table-responsive\">
              <table class=\"table table-bordered table-hover\">
                <thead>
                  <tr>
                    <td class=\"text-left\">";
        // line 42
        echo ($context["column_ip"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 43
        echo ($context["column_customer"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 44
        echo ($context["column_url"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 45
        echo ($context["column_referer"] ?? null);
        echo "</td>
                    <td class=\"text-left\">";
        // line 46
        echo ($context["column_date_added"] ?? null);
        echo "</td>
                    <td class=\"text-right\">";
        // line 47
        echo ($context["column_action"] ?? null);
        echo "</td>
                  </tr>
                </thead>
                <tbody>

                  ";
        // line 52
        if (($context["customers"] ?? null)) {
            // line 53
            echo "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["customers"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["customer"]) {
                // line 54
                echo "                      <tr>
                        <td class=\"text-left\"><a href=\"//whatismyipaddress.com/ip/";
                // line 55
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", array());
                echo "\" target=\"_blank\">";
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "ip", array());
                echo "</a></td>
                        <td class=\"text-left\">";
                // line 56
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "customer", array());
                echo "</td>
                        <td class=\"text-left\"><a href=\"";
                // line 57
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "url", array());
                echo "\" target=\"_blank\" rel=\"noreferrer\">";
                echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "url", array()), "", 30), "<br/>
                    ");
                // line 58
                echo "</a></td>
                        <td class=\"text-left\">";
                // line 59
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "referer", array())) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "referer", array());
                    echo "\" target=\"_blank\">";
                    echo twig_join_filter(twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["customer"], "referer", array()), "", 30), "<br/>
                    ");
                    // line 60
                    echo "</a>";
                }
                echo "</td>
                        <td class=\"text-left\">";
                // line 61
                echo twig_get_attribute($this->env, $this->source, $context["customer"], "date_added", array());
                echo "</td>
                        <td class=\"text-right\">";
                // line 62
                if (twig_get_attribute($this->env, $this->source, $context["customer"], "customer_id", array())) {
                    echo "<a href=\"";
                    echo twig_get_attribute($this->env, $this->source, $context["customer"], "edit", array());
                    echo "\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\"><i class=\"fas fa-pencil-alt\"></i></a>";
                } else {
                    // line 63
                    echo "                            <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                    echo ($context["button_edit"] ?? null);
                    echo "\" class=\"btn btn-primary\" disabled=\"disabled\"><i class=\"fas fa-pencil-alt\"></i></button>
                          ";
                }
                // line 64
                echo "</td>
                      </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "                  ";
        } else {
            // line 68
            echo "                    <tr>
                      <td class=\"text-center\" colspan=\"6\">";
            // line 69
            echo ($context["text_no_results"] ?? null);
            echo "</td>
                    </tr>
                  ";
        }
        // line 72
        echo "                </tbody>

              </table>
            </div>
            <div class=\"row\">
              <div class=\"col-sm-6 text-left\">";
        // line 77
        echo ($context["pagination"] ?? null);
        echo "</div>
              <div class=\"col-sm-6 text-right\">";
        // line 78
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
\tvar url = 'index.php?route=report/online&user_token=";
        // line 88
        echo ($context["user_token"] ?? null);
        echo "';

\tvar filter_customer = \$('input[name=\\'filter_customer\\']').val();

\tif (filter_customer) {
\t\turl += '&filter_customer=' + encodeURIComponent(filter_customer);
\t}

\tvar filter_ip = \$('input[name=\\'filter_ip\\']').val();

\tif (filter_ip) {
\t\turl += '&filter_ip=' + encodeURIComponent(filter_ip);
\t}

\tlocation = url;
});
//--></script>
<script type=\"text/javascript\"><!--
\$('input[name=\\'filter_customer\\']').autocomplete({
\t'source': function(request, response) {
\t\t\$.ajax({
\t\t\turl: 'index.php?route=customer/customer/autocomplete&user_token=";
        // line 109
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
//--></script>
";
        // line 126
        echo ($context["footer"] ?? null);
    }

    public function getTemplateName()
    {
        return "report/online.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  290 => 126,  270 => 109,  246 => 88,  233 => 78,  229 => 77,  222 => 72,  216 => 69,  213 => 68,  210 => 67,  202 => 64,  196 => 63,  188 => 62,  184 => 61,  179 => 60,  172 => 59,  169 => 58,  164 => 57,  160 => 56,  154 => 55,  151 => 54,  146 => 53,  144 => 52,  136 => 47,  132 => 46,  128 => 45,  124 => 44,  120 => 43,  116 => 42,  107 => 36,  97 => 29,  87 => 26,  77 => 23,  71 => 20,  62 => 13,  51 => 11,  47 => 10,  42 => 8,  36 => 7,  32 => 6,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "report/online.twig", "/var/www/html/vncrafts.com/admin/view/template/report/online.twig");
    }
}
