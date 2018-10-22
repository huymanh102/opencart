<?php

/* default/template/extension/total/coupon.twig */
class __TwigTemplate_b3cd76ad3a6d1fbd1f2eee9d5a1c3936b0b67fe692274ed67da55cf4d1438c90 extends Twig_Template
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
  <h4 class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-coupon\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h4>
  <div id=\"collapse-coupon\" class=\"collapse\" data-parent=\"#accordion\">
    <div class=\"card-body\">
      <div class=\"row\">
        <label class=\"col-md-2 col-form-label\" for=\"input-coupon\">";
        // line 6
        echo ($context["entry_coupon"] ?? null);
        echo "</label>
        <div class=\"col-md-10\">
          <div class=\"input-group\">
            <input type=\"text\" name=\"coupon\" value=\"";
        // line 9
        echo ($context["coupon"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_coupon"] ?? null);
        echo "\" id=\"input-coupon\" class=\"form-control\"/>
            <div class=\"input-group-append\">
              <button type=\"button\" id=\"button-coupon\" data-loading-text=\"";
        // line 11
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_coupon"] ?? null);
        echo "</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-coupon').on('click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/coupon/coupon',
\t\t  type: 'post',
\t\t  data: 'coupon=' + encodeURIComponent(\$('input[name=\\'coupon\\']').val()),
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-coupon').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-coupon').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('#collapse-coupon .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
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
  //-->
  </script>
</div>
";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/coupon.twig";
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
        return new Twig_Source("", "default/template/extension/total/coupon.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/extension/total/coupon.twig");
    }
}
