<?php

/* @Framework/Form/number_widget.html.php */
class __TwigTemplate_87ec3d4c96c830715b6c4b523ee3971491a1f6b16a2dd8253304336e3817398e extends Twig_Template
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
        $__internal_4c0b8f224de5bb6b5e2fff17de6929f4daacc6ff867edefb1dc9fbbc72d1a0b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4c0b8f224de5bb6b5e2fff17de6929f4daacc6ff867edefb1dc9fbbc72d1a0b1->enter($__internal_4c0b8f224de5bb6b5e2fff17de6929f4daacc6ff867edefb1dc9fbbc72d1a0b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        $__internal_2541578dea6521b4a3af5cb623a6eb43470b6277cc333e8f9d9926a4354095ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2541578dea6521b4a3af5cb623a6eb43470b6277cc333e8f9d9926a4354095ed->enter($__internal_2541578dea6521b4a3af5cb623a6eb43470b6277cc333e8f9d9926a4354095ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/number_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
";
        
        $__internal_4c0b8f224de5bb6b5e2fff17de6929f4daacc6ff867edefb1dc9fbbc72d1a0b1->leave($__internal_4c0b8f224de5bb6b5e2fff17de6929f4daacc6ff867edefb1dc9fbbc72d1a0b1_prof);

        
        $__internal_2541578dea6521b4a3af5cb623a6eb43470b6277cc333e8f9d9926a4354095ed->leave($__internal_2541578dea6521b4a3af5cb623a6eb43470b6277cc333e8f9d9926a4354095ed_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/number_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'text')) ?>
", "@Framework/Form/number_widget.html.php", "/Applications/MAMP/htdocs/Symfony/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/number_widget.html.php");
    }
}
