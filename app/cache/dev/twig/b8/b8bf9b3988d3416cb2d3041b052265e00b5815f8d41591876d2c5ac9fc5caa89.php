<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_60c5783e8627a920c1a37a92969a1a90c635ef19c2c8db848f4bb72ec1812c87 extends Twig_Template
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
        $__internal_0b38c2eb3dc49cc6005f7f273a6d870fa068b9c7bc691837460812af45fa9c74 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b38c2eb3dc49cc6005f7f273a6d870fa068b9c7bc691837460812af45fa9c74->enter($__internal_0b38c2eb3dc49cc6005f7f273a6d870fa068b9c7bc691837460812af45fa9c74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_0b38c2eb3dc49cc6005f7f273a6d870fa068b9c7bc691837460812af45fa9c74->leave($__internal_0b38c2eb3dc49cc6005f7f273a6d870fa068b9c7bc691837460812af45fa9c74_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
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
", "@Framework/Form/reset_widget.html.php", "/home/ewa/Workspace/AddressBook/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/Form/reset_widget.html.php");
    }
}
