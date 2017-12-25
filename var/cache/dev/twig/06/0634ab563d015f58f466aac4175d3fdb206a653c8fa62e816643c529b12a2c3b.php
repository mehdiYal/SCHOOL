<?php

/* @Framework/Form/form_enctype.html.php */
class __TwigTemplate_a45c09c8519e4c4f4d1ef042bc714e49b8f5720ba4b775d01d36ed7edc7ab329 extends Twig_Template
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
        $__internal_81a483e723e60fa1a295b30a09e199155e3143aa04333c4b613cb450576805c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81a483e723e60fa1a295b30a09e199155e3143aa04333c4b613cb450576805c2->enter($__internal_81a483e723e60fa1a295b30a09e199155e3143aa04333c4b613cb450576805c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        $__internal_fb1ec75d9dfcac76ad75f9fe2a54e6fee899bed187210ebde9cb956fee7ec366 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb1ec75d9dfcac76ad75f9fe2a54e6fee899bed187210ebde9cb956fee7ec366->enter($__internal_fb1ec75d9dfcac76ad75f9fe2a54e6fee899bed187210ebde9cb956fee7ec366_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_enctype.html.php"));

        // line 1
        echo "<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
";
        
        $__internal_81a483e723e60fa1a295b30a09e199155e3143aa04333c4b613cb450576805c2->leave($__internal_81a483e723e60fa1a295b30a09e199155e3143aa04333c4b613cb450576805c2_prof);

        
        $__internal_fb1ec75d9dfcac76ad75f9fe2a54e6fee899bed187210ebde9cb956fee7ec366->leave($__internal_fb1ec75d9dfcac76ad75f9fe2a54e6fee899bed187210ebde9cb956fee7ec366_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_enctype.html.php";
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
        return new Twig_Source("<?php if (\$form->vars['multipart']): ?>enctype=\"multipart/form-data\"<?php endif ?>
", "@Framework/Form/form_enctype.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/form_enctype.html.php");
    }
}
