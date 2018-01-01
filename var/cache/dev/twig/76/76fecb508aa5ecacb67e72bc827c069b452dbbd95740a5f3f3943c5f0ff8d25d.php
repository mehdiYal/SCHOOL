<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_49c9c8ceb00d5cddaddb9ee4fe17a2c32da6f69838653b74fc77dd1a31896e3d extends Twig_Template
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
        $__internal_b3f22463894095a0923b2cd8e38acc5fa3f4a144d496b3dc198d57be2ee1c8ad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3f22463894095a0923b2cd8e38acc5fa3f4a144d496b3dc198d57be2ee1c8ad->enter($__internal_b3f22463894095a0923b2cd8e38acc5fa3f4a144d496b3dc198d57be2ee1c8ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_5d66ffa643b371e4b419a267efdcea32a0c5b68014d850918186c93c3183e5a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d66ffa643b371e4b419a267efdcea32a0c5b68014d850918186c93c3183e5a8->enter($__internal_5d66ffa643b371e4b419a267efdcea32a0c5b68014d850918186c93c3183e5a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_b3f22463894095a0923b2cd8e38acc5fa3f4a144d496b3dc198d57be2ee1c8ad->leave($__internal_b3f22463894095a0923b2cd8e38acc5fa3f4a144d496b3dc198d57be2ee1c8ad_prof);

        
        $__internal_5d66ffa643b371e4b419a267efdcea32a0c5b68014d850918186c93c3183e5a8->leave($__internal_5d66ffa643b371e4b419a267efdcea32a0c5b68014d850918186c93c3183e5a8_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "/Applications/MAMP/htdocs/Schoolium/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/hidden_widget.html.php");
    }
}
