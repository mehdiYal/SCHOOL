<?php

/* @Framework/Form/form.html.php */
class __TwigTemplate_369416ce0332a0ae5a4d2ae5dba29c42b8e4a0fc1b60bbeab15c15728178b1a6 extends Twig_Template
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
        $__internal_786b5f24ca510978130aeb66bda09847e240e8302afcee0ae007ff448ef42d71 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_786b5f24ca510978130aeb66bda09847e240e8302afcee0ae007ff448ef42d71->enter($__internal_786b5f24ca510978130aeb66bda09847e240e8302afcee0ae007ff448ef42d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        $__internal_1e6321c788acc8a79cf778fcb3af2d013777826bec571af804eb2291f9ca7292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e6321c788acc8a79cf778fcb3af2d013777826bec571af804eb2291f9ca7292->enter($__internal_1e6321c788acc8a79cf778fcb3af2d013777826bec571af804eb2291f9ca7292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form.html.php"));

        // line 1
        echo "<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
";
        
        $__internal_786b5f24ca510978130aeb66bda09847e240e8302afcee0ae007ff448ef42d71->leave($__internal_786b5f24ca510978130aeb66bda09847e240e8302afcee0ae007ff448ef42d71_prof);

        
        $__internal_1e6321c788acc8a79cf778fcb3af2d013777826bec571af804eb2291f9ca7292->leave($__internal_1e6321c788acc8a79cf778fcb3af2d013777826bec571af804eb2291f9ca7292_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->start(\$form) ?>
    <?php echo \$view['form']->widget(\$form) ?>
<?php echo \$view['form']->end(\$form) ?>
", "@Framework/Form/form.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form.html.php");
    }
}
