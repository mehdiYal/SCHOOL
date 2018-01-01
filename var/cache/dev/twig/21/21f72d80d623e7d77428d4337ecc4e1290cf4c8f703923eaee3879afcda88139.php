<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_9de58b6c14c2bee6491d3626e0d6b66cf6de259357fe56d7ba070e80f66bddf6 extends Twig_Template
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
        $__internal_fbe0ebdc8a30edf16063fe66ef2401a203dd7ca63ca13e4ab8ae6c6a75a43fbb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fbe0ebdc8a30edf16063fe66ef2401a203dd7ca63ca13e4ab8ae6c6a75a43fbb->enter($__internal_fbe0ebdc8a30edf16063fe66ef2401a203dd7ca63ca13e4ab8ae6c6a75a43fbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_8a0dbeb3e04692e91aadd37d32bfd870628650727d72ef8de4b124534fcaef36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a0dbeb3e04692e91aadd37d32bfd870628650727d72ef8de4b124534fcaef36->enter($__internal_8a0dbeb3e04692e91aadd37d32bfd870628650727d72ef8de4b124534fcaef36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_fbe0ebdc8a30edf16063fe66ef2401a203dd7ca63ca13e4ab8ae6c6a75a43fbb->leave($__internal_fbe0ebdc8a30edf16063fe66ef2401a203dd7ca63ca13e4ab8ae6c6a75a43fbb_prof);

        
        $__internal_8a0dbeb3e04692e91aadd37d32bfd870628650727d72ef8de4b124534fcaef36->leave($__internal_8a0dbeb3e04692e91aadd37d32bfd870628650727d72ef8de4b124534fcaef36_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/search_widget.html.php");
    }
}
