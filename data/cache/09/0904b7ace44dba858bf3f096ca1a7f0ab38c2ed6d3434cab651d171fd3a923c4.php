<?php

/* default/template/extension/total/shipping.twig */
class __TwigTemplate_9063446c51e6670cc6c5ac4ce62055c2426987899c0580b6da68653abb517f26 extends Twig_Template
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
  <h4 class=\"card-header collapsed\" data-toggle=\"collapse\" data-target=\"#collapse-shipping\">";
        // line 2
        echo ($context["heading_title"] ?? null);
        echo "</h4>
  <div id=\"collapse-shipping\" class=\"collapse\" data-parent=\"#accordion\">
    <div class=\"card-body\">
      <div class=\"form-group row required\">
        <label class=\"col-sm-3 col-form-label\" for=\"input-country\">";
        // line 6
        echo ($context["entry_country"] ?? null);
        echo "</label>
        <div class=\"col-md-9\">
          <select name=\"country_id\" id=\"input-country\" class=\"form-control\">
            <option value=\"\">";
        // line 9
        echo ($context["text_select"] ?? null);
        echo "</option>
            ";
        // line 10
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["countries"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 11
            echo "              ";
            if ((twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array()) == ($context["country_id"] ?? null))) {
                // line 12
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                echo "</option>
              ";
            } else {
                // line 14
                echo "                <option value=\"";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "country_id", array());
                echo "\">";
                echo twig_get_attribute($this->env, $this->source, $context["country"], "name", array());
                echo "</option>
              ";
            }
            // line 16
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "          </select>
        </div>
      </div>
      <div class=\"form-group row required\">
        <label class=\"col-sm-3 col-form-label\" for=\"input-zone\">";
        // line 21
        echo ($context["entry_zone"] ?? null);
        echo "</label>
        <div class=\"col-md-9\">
          <select name=\"zone_id\" id=\"input-zone\" class=\"form-control\"> </select>
        </div>
      </div>
      <div class=\"form-group row required\">
        <label class=\"col-md-3 col-form-label\" for=\"input-postcode\">";
        // line 27
        echo ($context["entry_postcode"] ?? null);
        echo "</label>
        <div class=\"col-md-9\">
          <input type=\"text\" name=\"postcode\" value=\"";
        // line 29
        echo ($context["postcode"] ?? null);
        echo "\" placeholder=\"";
        echo ($context["entry_postcode"] ?? null);
        echo "\" id=\"input-postcode\" class=\"form-control\"/>
        </div>
      </div>
      <div class=\"buttons clearfix\">
        <div class=\"float-right\">
          <button type=\"button\" id=\"button-quote\" data-loading-text=\"";
        // line 34
        echo ($context["text_loading"] ?? null);
        echo "\" class=\"btn btn-primary\">";
        echo ($context["button_quote"] ?? null);
        echo "</button>
        </div>
      </div>
    </div>
  </div>
  <script type=\"text/javascript\"><!--
  \$('#button-quote').on('click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/shipping/quote',
\t\t  type: 'post',
\t\t  data: 'country_id=' + \$('select[name=\\'country_id\\']').val() + '&zone_id=' + \$('select[name=\\'zone_id\\']').val() + '&postcode=' + encodeURIComponent(\$('input[name=\\'postcode\\']').val()),
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-quote').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-quote').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible, .text-danger').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  if (json['error']['warning']) {
\t\t\t\t\t  \$('#collapse-shipping .card-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t  }

\t\t\t\t  if (json['error']['country']) {
\t\t\t\t\t  \$('select[name=\\'country_id\\']').after('<div class=\"text-danger\">' + json['error']['country'] + '</div>');
\t\t\t\t  }

\t\t\t\t  if (json['error']['zone']) {
\t\t\t\t\t  \$('select[name=\\'zone_id\\']').after('<div class=\"text-danger\">' + json['error']['zone'] + '</div>');
\t\t\t\t  }

\t\t\t\t  if (json['error']['postcode']) {
\t\t\t\t\t  \$('input[name=\\'postcode\\']').after('<div class=\"text-danger\">' + json['error']['postcode'] + '</div>');
\t\t\t\t  }
\t\t\t  }

\t\t\t  if (json['shipping_method']) {
\t\t\t\t  \$('#modal-shipping').remove();

\t\t\t\t  html = '<div id=\"modal-shipping\" class=\"modal\">';
\t\t\t\t  html += '  <div class=\"modal-dialog\">';
\t\t\t\t  html += '    <div class=\"modal-content\">';
\t\t\t\t  html += '      <div class=\"modal-header\">';
\t\t\t\t  html += '        <h4 class=\"modal-title\">";
        // line 80
        echo ($context["text_shipping_method"] ?? null);
        echo "</h4>';
\t\t\t\t  html += '      </div>';
\t\t\t\t  html += '      <div class=\"modal-body\">';

\t\t\t\t  for (i in json['shipping_method']) {
\t\t\t\t\t  html += '<p><strong>' + json['shipping_method'][i]['title'] + '</strong></p>';

\t\t\t\t\t  if (!json['shipping_method'][i]['error']) {
\t\t\t\t\t\t  for (j in json['shipping_method'][i]['quote']) {
\t\t\t\t\t\t\t  html += '<div class=\"form-check\">';
\t\t\t\t\t\t\t  html += '  <label>';

\t\t\t\t\t\t\t  if (json['shipping_method'][i]['quote'][j]['code'] == '";
        // line 92
        echo ($context["shipping_method"] ?? null);
        echo "') {
\t\t\t\t\t\t\t\t  html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" checked=\"checked\" /> ';
\t\t\t\t\t\t\t  } else {
\t\t\t\t\t\t\t\t  html += '<input type=\"radio\" name=\"shipping_method\" value=\"' + json['shipping_method'][i]['quote'][j]['code'] + '\" /> ';
\t\t\t\t\t\t\t  }

\t\t\t\t\t\t\t  html += json['shipping_method'][i]['quote'][j]['title'] + ' - ' + json['shipping_method'][i]['quote'][j]['text'] + '</label></div>';
\t\t\t\t\t\t  }
\t\t\t\t\t  } else {
\t\t\t\t\t\t  html += '<div class=\"alert alert-danger alert-dismissible\">' + json['shipping_method'][i]['error'] + '</div>';
\t\t\t\t\t  }
\t\t\t\t  }

\t\t\t\t  html += '      </div>';
\t\t\t\t  html += '      <div class=\"modal-footer\">';
\t\t\t\t  html += '        <button type=\"button\" class=\"btn btn-light\" data-dismiss=\"modal\">";
        // line 107
        echo ($context["button_cancel"] ?? null);
        echo "</button>';

                ";
        // line 109
        if (($context["shipping_method"] ?? null)) {
            // line 110
            echo "\t\t\t\t  html += '        <button type=\"button\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" class=\"btn btn-primary\">";
            echo ($context["button_shipping"] ?? null);
            echo "</button>';
                ";
        } else {
            // line 112
            echo "\t\t\t\t  html += '        <button type=\"button\" id=\"button-shipping\" data-loading-text=\"";
            echo ($context["text_loading"] ?? null);
            echo "\" disabled=\"disabled\" class=\"btn btn-primary\">";
            echo ($context["button_shipping"] ?? null);
            echo "</button>';
                ";
        }
        // line 114
        echo "
\t\t\t\t  html += '      </div>';
\t\t\t\t  html += '    </div>';
\t\t\t\t  html += '  </div>';
\t\t\t\t  html += '</div> ';

\t\t\t\t  \$('body').append(html);

\t\t\t\t  \$('#modal-shipping').modal('show');

\t\t\t\t  \$('input[name=\\'shipping_method\\']').on('change', function() {
\t\t\t\t\t  \$('#button-shipping').prop('disabled', false);
\t\t\t\t  });
\t\t\t  }
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$(document).delegate('#button-shipping', 'click', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/shipping/shipping',
\t\t  type: 'post',
\t\t  data: 'shipping_method=' + encodeURIComponent(\$('input[name=\\'shipping_method\\']:checked').val()),
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('#button-shipping').button('loading');
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('#button-shipping').button('reset');
\t\t  },
\t\t  success: function(json) {
\t\t\t  \$('.alert-dismissible').remove();

\t\t\t  if (json['error']) {
\t\t\t\t  \$('.breadcrumb').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t  \$('html, body').animate({scrollTop: 0}, 'slow');
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
  <script type=\"text/javascript\"><!--
  \$('select[name=\\'country_id\\']').on('change', function() {
\t  \$.ajax({
\t\t  url: 'index.php?route=extension/total/shipping/country&country_id=' + this.value,
\t\t  dataType: 'json',
\t\t  beforeSend: function() {
\t\t\t  \$('select[name=\\'country_id\\']').prop('disabled', true);
\t\t  },
\t\t  complete: function() {
\t\t\t  \$('select[name=\\'country_id\\']').prop('disabled', false);
\t\t  },
\t\t  success: function(json) {
\t\t\t  if (json['postcode_required'] == '1') {
\t\t\t\t  \$('input[name=\\'postcode\\']').parent().parent().addClass('required');
\t\t\t  } else {
\t\t\t\t  \$('input[name=\\'postcode\\']').parent().parent().removeClass('required');
\t\t\t  }

\t\t\t  html = '<option value=\"\">";
        // line 184
        echo ($context["text_select"] ?? null);
        echo "</option>';

\t\t\t  if (json['zone'] && json['zone'] != '') {
\t\t\t\t  for (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\t  html += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\t  if (json['zone'][i]['zone_id'] == '";
        // line 190
        echo ($context["zone_id"] ?? null);
        echo "') {
\t\t\t\t\t\t  html += ' selected=\"selected\"';
\t\t\t\t\t  }

\t\t\t\t\t  html += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t  }
\t\t\t  } else {
\t\t\t\t  html += '<option value=\"0\" selected=\"selected\">";
        // line 197
        echo ($context["text_none"] ?? null);
        echo "</option>';
\t\t\t  }

\t\t\t  \$('select[name=\\'zone_id\\']').html(html);
\t\t  },
\t\t  error: function(xhr, ajaxOptions, thrownError) {
\t\t\t  alert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t  }
\t  });
  });

  \$('select[name=\\'country_id\\']').trigger('change');
  //--></script>
</div>";
    }

    public function getTemplateName()
    {
        return "default/template/extension/total/shipping.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  300 => 197,  290 => 190,  281 => 184,  209 => 114,  201 => 112,  193 => 110,  191 => 109,  186 => 107,  168 => 92,  153 => 80,  102 => 34,  92 => 29,  87 => 27,  78 => 21,  72 => 17,  66 => 16,  58 => 14,  50 => 12,  47 => 11,  43 => 10,  39 => 9,  33 => 6,  26 => 2,  23 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "default/template/extension/total/shipping.twig", "/var/www/html/vncrafts.com/catalog/view/theme/default/template/extension/total/shipping.twig");
    }
}
