<?php

/* elevesViews/addEleve.html.twig */
class __TwigTemplate_11a1d0bfcf8097296bf01a109f2429cfcbb5e977aa5bdd1cd4336b65fec9fdec extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base2.html.twig", "elevesViews/addEleve.html.twig", 1);
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
        $__internal_840d4768c14fb5863d7fc011c0f0452e0c46e459d8fb456b9a9bb2e6fd7dc140 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_840d4768c14fb5863d7fc011c0f0452e0c46e459d8fb456b9a9bb2e6fd7dc140->enter($__internal_840d4768c14fb5863d7fc011c0f0452e0c46e459d8fb456b9a9bb2e6fd7dc140_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/addEleve.html.twig"));

        $__internal_937e2be3c51679fe8810f3f38d69443c13d24a53ea9d0e9a046abb26cb8e17da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_937e2be3c51679fe8810f3f38d69443c13d24a53ea9d0e9a046abb26cb8e17da->enter($__internal_937e2be3c51679fe8810f3f38d69443c13d24a53ea9d0e9a046abb26cb8e17da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "elevesViews/addEleve.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_840d4768c14fb5863d7fc011c0f0452e0c46e459d8fb456b9a9bb2e6fd7dc140->leave($__internal_840d4768c14fb5863d7fc011c0f0452e0c46e459d8fb456b9a9bb2e6fd7dc140_prof);

        
        $__internal_937e2be3c51679fe8810f3f38d69443c13d24a53ea9d0e9a046abb26cb8e17da->leave($__internal_937e2be3c51679fe8810f3f38d69443c13d24a53ea9d0e9a046abb26cb8e17da_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0d8f2c9ab620027880b4f4491d1bf0378a429841f38f214e57c9f926bc5de38c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0d8f2c9ab620027880b4f4491d1bf0378a429841f38f214e57c9f926bc5de38c->enter($__internal_0d8f2c9ab620027880b4f4491d1bf0378a429841f38f214e57c9f926bc5de38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1996e2bce7dd19fe2a50f5f7e6fd23b9aac7ea624af79405751a8f98fbb340b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1996e2bce7dd19fe2a50f5f7e6fd23b9aac7ea624af79405751a8f98fbb340b6->enter($__internal_1996e2bce7dd19fe2a50f5f7e6fd23b9aac7ea624af79405751a8f98fbb340b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"page-content-wrap\">
                
    <div class=\"row\">
        <div class=\"col-md-12\">                 
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>";
        // line 10
        if (($context["edit"] ?? $this->getContext($context, "edit"))) {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("edit"), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("add"), "html", null, true);
        }
        echo " </strong> ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("student"), "html", null, true);
        echo "</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t<!-- START WIZARD WITH VALIDATION -->
                            
                                    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("attr" => array("id" => "wizard-validation", "class" => "form-horizontal")));
        echo "                                
                                    <div class=\"wizard show-submit wizard-validation\">
                                        <ul>
                                            <li>
                                                <a href=\"#step-1\">
                                                    <span class=\"stepNumber\">1</span>
                                                    <span class=\"stepDesc\">Eleve<br /><small>Information</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#step-2\">
                                                    <span class=\"stepNumber\">2</span>
                                                    <span class=\"stepDesc\">Parent<br /><small>Information</small></span>
                                                </a>
                                            </li>
                                                                              
                                        </ul>

                                        <div id=\"step-1\">   

                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 37
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
        // line 41
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 43
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "nom", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 48
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
        // line 52
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 54
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "prenom", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 59
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
        // line 63
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'widget', array("attr" => array("class" => "form-control datepicker")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 65
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "dateDeNaissance", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 70
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 72
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 73
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "annee", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 79
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-user\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
        // line 83
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 85
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "username", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t";
        // line 89
        if ((($context["edit"] ?? $this->getContext($context, "edit")) == false)) {
            // line 90
            echo "\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 91
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-unlock-alt\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
            // line 95
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
            // line 97
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "first", array()), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 102
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
            echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-unlock-alt\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t";
            // line 106
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'widget', array("attr" => array("class" => "form-control")));
            echo "
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t";
            // line 108
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "second", array()), 'errors');
            echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t";
        } else {
            // line 112
            echo "\t\t\t\t\t\t\t\t\t\t";
            $this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "plainPassword", array()), "setRendered", array());
            // line 113
            echo "\t\t\t\t\t\t\t\t\t\t";
        }
        echo "\t

                                        </div>

                                        <div id=\"step-2\">
                                        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t";
        // line 119
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'label', array("label_attr" => array("class" => "col-md-3 col-xs-12 control-label")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 121
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'widget', array("attr" => array("class" => "form-control select")));
        echo "
\t\t\t\t\t\t\t\t\t\t\t    \t";
        // line 122
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "parent", array()), 'errors');
        echo "
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                             
                                        </div>    
                                    </div>
                                                      
                            <!-- END WIZARD WITH VALIDATION -->
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t    </div>
\t\t\t";
        // line 133
        echo         $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
\t\t</div>
    </div>                     
</div>
";
        
        $__internal_1996e2bce7dd19fe2a50f5f7e6fd23b9aac7ea624af79405751a8f98fbb340b6->leave($__internal_1996e2bce7dd19fe2a50f5f7e6fd23b9aac7ea624af79405751a8f98fbb340b6_prof);

        
        $__internal_0d8f2c9ab620027880b4f4491d1bf0378a429841f38f214e57c9f926bc5de38c->leave($__internal_0d8f2c9ab620027880b4f4491d1bf0378a429841f38f214e57c9f926bc5de38c_prof);

    }

    // line 140
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6efa70e107f2cf25bb2f7326d5a388e06695c08b651e3975cc387e1db37a42c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efa70e107f2cf25bb2f7326d5a388e06695c08b651e3975cc387e1db37a42c8->enter($__internal_6efa70e107f2cf25bb2f7326d5a388e06695c08b651e3975cc387e1db37a42c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e3fad70162fd2cbaa154bb252cf6a8d922987395e1cb4cac967271d3f5f85ad2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3fad70162fd2cbaa154bb252cf6a8d922987395e1cb4cac967271d3f5f85ad2->enter($__internal_e3fad70162fd2cbaa154bb252cf6a8d922987395e1cb4cac967271d3f5f85ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 141
        echo "\t<script type='text/javascript' src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/bootstrap/bootstrap-select.js"), "html", null, true);
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 142
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/smartwizard/jquery.smartWizard-2.0.min.js"), "html", null, true);
        echo "\"></script>
\t<script type='text/javascript' src=\"";
        // line 143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/plugins/jquery-validation/jquery.validate.js"), "html", null, true);
        echo "\"></script>
\t<script>
\t\t\$('.active').removeClass('active');
        \$('.eleve').addClass('active');
        \$('.addEl').addClass('active');
\t</script>
";
        
        $__internal_e3fad70162fd2cbaa154bb252cf6a8d922987395e1cb4cac967271d3f5f85ad2->leave($__internal_e3fad70162fd2cbaa154bb252cf6a8d922987395e1cb4cac967271d3f5f85ad2_prof);

        
        $__internal_6efa70e107f2cf25bb2f7326d5a388e06695c08b651e3975cc387e1db37a42c8->leave($__internal_6efa70e107f2cf25bb2f7326d5a388e06695c08b651e3975cc387e1db37a42c8_prof);

    }

    public function getTemplateName()
    {
        return "elevesViews/addEleve.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  307 => 143,  303 => 142,  298 => 141,  289 => 140,  274 => 133,  260 => 122,  256 => 121,  251 => 119,  241 => 113,  238 => 112,  231 => 108,  226 => 106,  219 => 102,  211 => 97,  206 => 95,  199 => 91,  196 => 90,  194 => 89,  187 => 85,  182 => 83,  175 => 79,  166 => 73,  162 => 72,  157 => 70,  149 => 65,  144 => 63,  137 => 59,  129 => 54,  124 => 52,  117 => 48,  109 => 43,  104 => 41,  97 => 37,  73 => 16,  58 => 10,  50 => 4,  41 => 3,  11 => 1,);
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
        <div class=\"col-md-12\">                 
\t\t\t\t<div class=\"panel panel-default\">
\t\t            <div class=\"panel-heading\">
\t\t                <h3 class=\"panel-title\"><strong>{% if edit %}{{'edit'|trans}}{% else %}{{'add'|trans}}{% endif %} </strong> {{'student'|trans}}</h3>
\t\t            </div>
\t\t            <div class=\"panel-body\">

\t\t\t\t\t<!-- START WIZARD WITH VALIDATION -->
                            
                                    {{ form_start(form, { 'attr' : {'id':'wizard-validation','class': 'form-horizontal' } }) }}                                
                                    <div class=\"wizard show-submit wizard-validation\">
                                        <ul>
                                            <li>
                                                <a href=\"#step-1\">
                                                    <span class=\"stepNumber\">1</span>
                                                    <span class=\"stepDesc\">Eleve<br /><small>Information</small></span>
                                                </a>
                                            </li>
                                            <li>
                                                <a href=\"#step-2\">
                                                    <span class=\"stepNumber\">2</span>
                                                    <span class=\"stepDesc\">Parent<br /><small>Information</small></span>
                                                </a>
                                            </li>
                                                                              
                                        </ul>

                                        <div id=\"step-1\">   

                                            <div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.nom , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.nom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.nom) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.prenom , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-pencil\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.prenom ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.prenom) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.dateDeNaissance , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-calendar\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.dateDeNaissance ,{ 'attr': {'class': 'form-control datepicker'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.dateDeNaissance) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.annee , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_widget(form.annee ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.annee) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.username , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-user\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.username ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.username) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t{% if edit==false %}
\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.first , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-unlock-alt\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.plainPassword.first ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.plainPassword.first) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>

\t\t\t\t\t\t\t\t\t\t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.plainPassword.second , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"input-group\">
\t\t\t\t\t\t\t\t\t\t\t\t\t\t<span class=\"input-group-addon\"><span class=\"fa fa-unlock-alt\"></span></span>
\t\t\t\t\t\t\t\t\t\t\t    \t\t{{ form_widget(form.plainPassword.second ,{ 'attr': {'class': 'form-control'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t</div>
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.plainPassword.second) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t{% else %}
\t\t\t\t\t\t\t\t\t\t{% do form.plainPassword.setRendered %}
\t\t\t\t\t\t\t\t\t\t{% endif %}\t

                                        </div>

                                        <div id=\"step-2\">
                                        \t\t<div class=\"form-group\">
\t\t\t\t\t\t\t\t\t\t\t\t{{ form_label(form.parent , null ,{ 'label_attr': {'class': 'col-md-3 col-xs-12 control-label'} }) }}
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"col-md-6 col-xs-12\">
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_widget(form.parent ,{ 'attr': {'class': 'form-control select'} }) }}
\t\t\t\t\t\t\t\t\t\t\t    \t{{ form_errors(form.parent) }}
\t\t\t\t\t\t\t\t\t\t\t    </div>
\t\t\t\t\t\t\t\t\t\t\t\t</div>
                                             
                                        </div>    
                                    </div>
                                                      
                            <!-- END WIZARD WITH VALIDATION -->
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t    </div>
\t\t\t{{ form_end(form) }}
\t\t</div>
    </div>                     
</div>
{% endblock %}


{% block javascripts %}
\t<script type='text/javascript' src=\"{{ asset('js/plugins/bootstrap/bootstrap-select.js') }}\"></script>
\t<script type='text/javascript' src=\"{{ asset('js/plugins/smartwizard/jquery.smartWizard-2.0.min.js') }}\"></script>
\t<script type='text/javascript' src=\"{{ asset('js/plugins/jquery-validation/jquery.validate.js') }}\"></script>
\t<script>
\t\t\$('.active').removeClass('active');
        \$('.eleve').addClass('active');
        \$('.addEl').addClass('active');
\t</script>
{% endblock %}", "elevesViews/addEleve.html.twig", "/Applications/MAMP/htdocs/Schoolium/app/Resources/views/elevesViews/addEleve.html.twig");
    }
}