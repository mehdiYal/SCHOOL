<?php

/* :payment:payment.html.twig */
class __TwigTemplate_e9fd80e3859f012d009ea10a9dc19dbe6252a8af8d38bd3b7ecfbdb1889d10ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", ":payment:payment.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base2.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4e3e29c1d7e6d6d483d7c103d408755349ed6d0a5df344828909cd65d100b0df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e3e29c1d7e6d6d483d7c103d408755349ed6d0a5df344828909cd65d100b0df->enter($__internal_4e3e29c1d7e6d6d483d7c103d408755349ed6d0a5df344828909cd65d100b0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":payment:payment.html.twig"));

        $__internal_e864fe5c15e60f91636595cc4a19f1b6a1ae2c29e46cc100013678e3d4496998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e864fe5c15e60f91636595cc4a19f1b6a1ae2c29e46cc100013678e3d4496998->enter($__internal_e864fe5c15e60f91636595cc4a19f1b6a1ae2c29e46cc100013678e3d4496998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":payment:payment.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e3e29c1d7e6d6d483d7c103d408755349ed6d0a5df344828909cd65d100b0df->leave($__internal_4e3e29c1d7e6d6d483d7c103d408755349ed6d0a5df344828909cd65d100b0df_prof);

        
        $__internal_e864fe5c15e60f91636595cc4a19f1b6a1ae2c29e46cc100013678e3d4496998->leave($__internal_e864fe5c15e60f91636595cc4a19f1b6a1ae2c29e46cc100013678e3d4496998_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_554bc1396ec025815f76b57c9d3a062a77b31481c3ba478a2098863ae0c64a91 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_554bc1396ec025815f76b57c9d3a062a77b31481c3ba478a2098863ae0c64a91->enter($__internal_554bc1396ec025815f76b57c9d3a062a77b31481c3ba478a2098863ae0c64a91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_27c64a4bb1f3ea8bafda6f120f0a7d3923bfd92d1e4fc74f2723473b24eda127 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_27c64a4bb1f3ea8bafda6f120f0a7d3923bfd92d1e4fc74f2723473b24eda127->enter($__internal_27c64a4bb1f3ea8bafda6f120f0a7d3923bfd92d1e4fc74f2723473b24eda127_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">    
    <div class=\"row\">
    \t<div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-cutlery\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeRestauration", array()), "html", null, true);
        echo " DZD</div>
                    <div class=\"widget-title\">Frais de Restauration</div>
                    <div class=\"widget-subtitle\">";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeRestauration", array()), "html", null, true);
        echo " DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-graduation-cap\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeScolarite", array()), "html", null, true);
        echo " DZD</div>
                    <div class=\"widget-title\">Frais de Scolarité</div>
                    <div class=\"widget-subtitle\">";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeScolarite", array()), "html", null, true);
        echo " DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-bus\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">";
        // line 54
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeTransport", array()), "html", null, true);
        echo " DZD</div>
                    <div class=\"widget-title\">Frais de Transport</div>
                    <div class=\"widget-subtitle\">";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "fraisDeTransport", array()), "html", null, true);
        echo " DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>
    </div>  


    <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-danger\">
                        <div class=\"panel-heading\">
                                ";
        // line 74
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo " 
                                    <div class=\"form-group\">
                                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classes", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                                        <div class=\"col-md-6 col-xs-12\">
                                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classes", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
                                            ";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "classes", array()), 'errors');
        echo "
                                        </div>
                                    </div>
                                ";
        // line 82
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                        </div>
                        <div class=\"panel-body\">                   
                             <div class=\"table-responsive\">
                                <table id=\"customers2\" class=\"table datatable\">
                                    <thead>
                                        <tr>
                                            <th>Nom & Prenom</th>
                                            <th>Classe</th>
                                            <th>Payé</th>
                                            <th>Reste</th>
                                            <th>Ajouter Payement</th>
                                            <th>Liste des Payements</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "ecole", array()), "eleves", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["eleve"]) {
            // line 99
            echo "                                            <tr class=\"";
            if (($this->getAttribute($context["eleve"], "parent", array()) == null)) {
                echo " danger ";
            }
            echo "\" id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "id", array()), "html", null, true);
            echo "\">
                                                <td>";
            // line 100
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, $this->getAttribute($context["eleve"], "nom", array())), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["eleve"], "prenom", array()), "html", null, true);
            echo "</td>
                                                <td>";
            // line 101
            if (($this->getAttribute($context["eleve"], "classe", array()) != null)) {
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["eleve"], "classe", array()), "nom", array()), "html", null, true);
                echo " ";
            }
            echo "</td>
                                                <td>0DZD</td>
                                                <td>0DZD</td>
                                                <td style=\"text-align: center;\">
                                                    <a href=\"\" data-toggle=\"modal\" data-target=\"#pay\">
                                                        <span class=\"fa fa-plus\"></span>
                                                    </a>
                                                </td>
                                                <td style=\"text-align: center;\">
                                                    <a href=\"\" class=\"listPay\" data-toggle=\"modal\" data-target=\"#listpay\">
                                                        <span class=\"fa fa-list\"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['eleve'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 116
        echo "                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>                 
</div>

<div class=\"modal\" id=\"pay\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Ajouter Payement</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        ";
        // line 135
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo " 
            <div class=\"form-group\">
                ";
        // line 137
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "montant", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
                        ";
        // line 141
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "montant", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                    </div>
                    ";
        // line 143
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "montant", array()), 'errors');
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                    ";
        // line 147
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "datePayment", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
                            ";
        // line 151
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "datePayment", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo "
                        </div>
                        ";
        // line 153
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), "datePayment", array()), 'errors');
        echo "
                    </div>
                </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\">Valider</button>
        ";
        // line 159
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock((isset($context["payment"]) ? $context["payment"] : $this->getContext($context, "payment")), 'form_end');
        echo "
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal\" id=\"listpay\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">List des Payements</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"table-responsive\">
                <table id=\"customers2\" class=\"table datatable\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date de Payement</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody class=\"lisBody\">
                        
                    </tbody>
                </table>                                    
            </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
";
        
        $__internal_27c64a4bb1f3ea8bafda6f120f0a7d3923bfd92d1e4fc74f2723473b24eda127->leave($__internal_27c64a4bb1f3ea8bafda6f120f0a7d3923bfd92d1e4fc74f2723473b24eda127_prof);

        
        $__internal_554bc1396ec025815f76b57c9d3a062a77b31481c3ba478a2098863ae0c64a91->leave($__internal_554bc1396ec025815f76b57c9d3a062a77b31481c3ba478a2098863ae0c64a91_prof);

    }

    // line 200
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_91802360b0874cf75f48ad1786c0cf5978e4040642fc749a1ada21481eb95ae8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91802360b0874cf75f48ad1786c0cf5978e4040642fc749a1ada21481eb95ae8->enter($__internal_91802360b0874cf75f48ad1786c0cf5978e4040642fc749a1ada21481eb95ae8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_004a8b742ff16d5c7468e36bfc38a2ff94d41b2db41c7f99aec42d5617bcf9f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_004a8b742ff16d5c7468e36bfc38a2ff94d41b2db41c7f99aec42d5617bcf9f1->enter($__internal_004a8b742ff16d5c7468e36bfc38a2ff94d41b2db41c7f99aec42d5617bcf9f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 201
        echo "    <script type=\"text/javascript\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/datatables/jquery.dataTables.min.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/tableExport.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jquery.base64.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 204
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/html2canvas.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 205
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/sprintf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/jspdf.js"), "html", null, true);
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 207
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/tableexport/jspdf/libs/base64.js"), "html", null, true);
        echo "\"></script>       
\t<script type='text/javascript' src=\"";
        // line 208
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
    <script>
        var listPath = \"";
        // line 210
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("getPayements");
        echo "\";
    </script>
    <script type='text/javascript' src=\"";
        // line 212
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/project/payment.js"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_004a8b742ff16d5c7468e36bfc38a2ff94d41b2db41c7f99aec42d5617bcf9f1->leave($__internal_004a8b742ff16d5c7468e36bfc38a2ff94d41b2db41c7f99aec42d5617bcf9f1_prof);

        
        $__internal_91802360b0874cf75f48ad1786c0cf5978e4040642fc749a1ada21481eb95ae8->leave($__internal_91802360b0874cf75f48ad1786c0cf5978e4040642fc749a1ada21481eb95ae8_prof);

    }

    public function getTemplateName()
    {
        return ":payment:payment.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  386 => 212,  381 => 210,  376 => 208,  372 => 207,  368 => 206,  364 => 205,  360 => 204,  356 => 203,  352 => 202,  347 => 201,  338 => 200,  289 => 159,  280 => 153,  275 => 151,  268 => 147,  261 => 143,  256 => 141,  249 => 137,  244 => 135,  223 => 116,  198 => 101,  192 => 100,  183 => 99,  179 => 98,  160 => 82,  154 => 79,  150 => 78,  145 => 76,  140 => 74,  119 => 56,  114 => 54,  93 => 36,  88 => 34,  67 => 16,  62 => 14,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base2.html.twig' %}

{% block body %}
<div class=\"page-content-wrap\">    
    <div class=\"row\">
    \t<div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-cutlery\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeRestauration}} DZD</div>
                    <div class=\"widget-title\">Frais de Restauration</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisDeRestauration}} DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-graduation-cap\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeScolarite}} DZD</div>
                    <div class=\"widget-title\">Frais de Scolarité</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisDeScolarite}} DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>

        <div class=\"col-md-4\">
            
            <!-- START WIDGET MESSAGES -->
            <div class=\"widget widget-default widget-item-icon\">
                <div class=\"widget-item-left\">
                    <span class=\"fa fa-bus\"></span>
                </div>                             
                <div class=\"widget-data\">
                    <div class=\"widget-int num-count\">{{app.user.ecole.fraisDeTransport}} DZD</div>
                    <div class=\"widget-title\">Frais de Transport</div>
                    <div class=\"widget-subtitle\">{{app.user.ecole.fraisDeTransport}} DZD par an</div>
                </div>      
                <div class=\"widget-controls\">                                
                    <a href=\"#\" class=\"widget-control-right widget-remove\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"Remove Widget\"><span class=\"fa fa-times\"></span></a>
                </div>
            </div>                            
            <!-- END WIDGET MESSAGES -->
            
        </div>
    </div>  


    <div class=\"row\">
                <div class=\"col-md-12\">
                    
                    <!-- START DATATABLE EXPORT -->
                    <div class=\"panel panel-danger\">
                        <div class=\"panel-heading\">
                                {{ form_start(form, { 'attr' : { 'class': 'form-horizontal' } }) }} 
                                    <div class=\"form-group\">
                                        {{ form_label(form.classes , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                                        <div class=\"col-md-6 col-xs-12\">
                                            {{ form_widget(form.classes ,{ 'attr': {'class': 'form-control select'} }) }}
                                            {{ form_errors(form.classes) }}
                                        </div>
                                    </div>
                                {{ form_end(form) }}
                        </div>
                        <div class=\"panel-body\">                   
                             <div class=\"table-responsive\">
                                <table id=\"customers2\" class=\"table datatable\">
                                    <thead>
                                        <tr>
                                            <th>Nom & Prenom</th>
                                            <th>Classe</th>
                                            <th>Payé</th>
                                            <th>Reste</th>
                                            <th>Ajouter Payement</th>
                                            <th>Liste des Payements</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        {% for eleve in app.user.ecole.eleves %}
                                            <tr class=\"{% if (eleve.parent == null)%} danger {% endif %}\" id=\"{{eleve.id}}\">
                                                <td>{{ eleve.nom|upper}} {{ eleve.prenom}}</td>
                                                <td>{% if eleve.classe != null %} {{ eleve.classe.nom}} {% endif %}</td>
                                                <td>0DZD</td>
                                                <td>0DZD</td>
                                                <td style=\"text-align: center;\">
                                                    <a href=\"\" data-toggle=\"modal\" data-target=\"#pay\">
                                                        <span class=\"fa fa-plus\"></span>
                                                    </a>
                                                </td>
                                                <td style=\"text-align: center;\">
                                                    <a href=\"\" class=\"listPay\" data-toggle=\"modal\" data-target=\"#listpay\">
                                                        <span class=\"fa fa-list\"></span>
                                                    </a>
                                                </td>
                                            </tr>
                                        {% endfor %}
                                    </tbody>
                                </table>                                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>                 
</div>

<div class=\"modal\" id=\"pay\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">Ajouter Payement</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        {{ form_start(payment, { 'attr' : { 'class': 'form-horizontal' } }) }} 
            <div class=\"form-group\">
                {{ form_label(payment.montant , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                <div class=\"col-md-6 col-xs-12\">
                    <div class=\"input-group\">
                        <span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
                        {{ form_widget(payment.montant ,{ 'attr': {'class': 'form-control'} }) }}
                    </div>
                    {{ form_errors(payment.montant) }}
                </div>
            </div>
            <div class=\"form-group\">
                    {{ form_label(payment.datePayment , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
                    <div class=\"col-md-6 col-xs-12\">
                        <div class=\"input-group\">
                            <span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
                            {{ form_widget(payment.datePayment ,{ 'attr': {'class': 'form-control datepicker'} }) }}
                        </div>
                        {{ form_errors(payment.datePayment) }}
                    </div>
                </div>
      </div>
      <div class=\"modal-footer\">
        <button class=\"btn btn-primary\">Valider</button>
        {{ form_end(payment) }}
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>

<div class=\"modal\" id=\"listpay\" tabindex=\"-1\" role=\"dialog\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-header\">
        <h5 class=\"modal-title\">List des Payements</h5>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span aria-hidden=\"true\">&times;</span>
        </button>
      </div>
      <div class=\"modal-body\">
        <div class=\"table-responsive\">
                <table id=\"customers2\" class=\"table datatable\">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Date de Payement</th>
                            <th>Montant</th>
                        </tr>
                    </thead>
                    <tbody class=\"lisBody\">
                        
                    </tbody>
                </table>                                    
            </div>
      </div>
      <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-dismiss=\"modal\">Close</button>
      </div>
    </div>
  </div>
</div>
{% endblock %}


{% block javascripts %}
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/datatables/jquery.dataTables.min.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/tableExport.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jquery.base64.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/html2canvas.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/sprintf.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/jspdf.js')}}\"></script>
    <script type=\"text/javascript\" src=\"{{ asset('js/plugins/tableexport/jspdf/libs/base64.js')}}\"></script>       
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
    <script>
        var listPath = \"{{ path('getPayements') }}\";
    </script>
    <script type='text/javascript' src=\"{{ asset('js/project/payment.js') }}\"></script>

{% endblock %}", ":payment:payment.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/payment/payment.html.twig");
    }
}
