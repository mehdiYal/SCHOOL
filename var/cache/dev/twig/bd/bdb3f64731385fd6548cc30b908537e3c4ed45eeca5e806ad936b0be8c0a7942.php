<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_40cd430c664ec2a698c7b428b63a8a71eb1673fcadbbc2f297210694c6bd80fa extends Twig_Template
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
        $__internal_898929d16e099e47340767c19f79ebdc7c34c826d7c9e4d5ab41ae2b6689e86c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_898929d16e099e47340767c19f79ebdc7c34c826d7c9e4d5ab41ae2b6689e86c->enter($__internal_898929d16e099e47340767c19f79ebdc7c34c826d7c9e4d5ab41ae2b6689e86c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_3fa06e349a8a6f7725861784d440ab982e0591bc7a7f5d529f1d246fec43fb45 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3fa06e349a8a6f7725861784d440ab982e0591bc7a7f5d529f1d246fec43fb45->enter($__internal_3fa06e349a8a6f7725861784d440ab982e0591bc7a7f5d529f1d246fec43fb45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_898929d16e099e47340767c19f79ebdc7c34c826d7c9e4d5ab41ae2b6689e86c->leave($__internal_898929d16e099e47340767c19f79ebdc7c34c826d7c9e4d5ab41ae2b6689e86c_prof);

        
        $__internal_3fa06e349a8a6f7725861784d440ab982e0591bc7a7f5d529f1d246fec43fb45->leave($__internal_3fa06e349a8a6f7725861784d440ab982e0591bc7a7f5d529f1d246fec43fb45_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
