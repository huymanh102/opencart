<?php

/* default/template/extension/total/voucher.twig */
class __TwigTemplate_0f83d14e9359407258bfed0f6d986a61f757c0e76350d912aa4fa9ee7d1f4fb5 extends Twig_Template
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
        echo "<div class=\"card\">
  <h4 class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-voucher\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h4>
  <div id=\"collapse-voucher\" class=\"collapse\" data-parent=\"#accordion\">
    <div class=\"card-body\">
      <div class=\"row\">
        <label class=\"col-sm-2 col-form-label\" for=\"input-voucher\">";
        // line 6
        echo ($context["entry_voucher"] ?? null);
        echo "</label>
        <div class=\"col-md-10\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"voucher\" value=\"";
        // line 9
        echo ($context["voucher"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_voucher"] ?? null);
        echo "\" id=\"input-voucher\" class=\"form-control\"/>
            <div class=\"input-group-append\">
              <input type=\"submit\" value=\"";
        // line 11
        echo ($context["button_voucher"] ?? null);
        echo "\" id=\"button-voucher\" data-loading-text=\"";
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\"/>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-voucher').on('click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/voucher/voucher',
\t\t  type: 'post',
\t\t  data: 'voucher=' + encodeURIComponent(\$('input[name=\\'voucher\\']').val()),
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-voucher').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-voucher').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#collapse-voucher .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t  }

\t\t\t  if (json['redirect']) {
\t\t\t\t  location = json['redirect'];
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });
  //--></script>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/voucher.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 11,  39 => 9,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/extension/total/voucher.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/extension/total/voucher.twig");
    }
}
