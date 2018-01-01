<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_9523f2ca1d503392caf3b51d602e9699f81943a3a53f75f16f6fa95042218bd4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1afbb26da88018efe73c8082e501e5ae402129ee85b6368be43dbb55dc2980e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1afbb26da88018efe73c8082e501e5ae402129ee85b6368be43dbb55dc2980e0->enter($__internal_1afbb26da88018efe73c8082e501e5ae402129ee85b6368be43dbb55dc2980e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_2ef385cbdc9f2a937400cc0e04c1dbe1a2ecc1c236affc48eb42184d0b457c05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ef385cbdc9f2a937400cc0e04c1dbe1a2ecc1c236affc48eb42184d0b457c05->enter($__internal_2ef385cbdc9f2a937400cc0e04c1dbe1a2ecc1c236affc48eb42184d0b457c05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_1afbb26da88018efe73c8082e501e5ae402129ee85b6368be43dbb55dc2980e0->leave($__internal_1afbb26da88018efe73c8082e501e5ae402129ee85b6368be43dbb55dc2980e0_prof);

        
        $__internal_2ef385cbdc9f2a937400cc0e04c1dbe1a2ecc1c236affc48eb42184d0b457c05->leave($__internal_2ef385cbdc9f2a937400cc0e04c1dbe1a2ecc1c236affc48eb42184d0b457c05_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/repeated_row.html.php");
    }
}
