<?php

/* @AddressBook/Main/base.html.twig */
class __TwigTemplate_a6510cc7b01476fc879e34551bbc22e98c920120fcf876bd19093a0a4287eed3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "@AddressBook/Main/base.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_aa9bd4c81fc8ec751fdf429e62a03b498f8f92198c9eff7bc5ac2b242f9e9a5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa9bd4c81fc8ec751fdf429e62a03b498f8f92198c9eff7bc5ac2b242f9e9a5b->enter($__internal_aa9bd4c81fc8ec751fdf429e62a03b498f8f92198c9eff7bc5ac2b242f9e9a5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AddressBook/Main/base.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aa9bd4c81fc8ec751fdf429e62a03b498f8f92198c9eff7bc5ac2b242f9e9a5b->leave($__internal_aa9bd4c81fc8ec751fdf429e62a03b498f8f92198c9eff7bc5ac2b242f9e9a5b_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_09eee36950ceb71ef14c6a65b17594e456fbf9857e7541effcc32488aaa33cbb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09eee36950ceb71ef14c6a65b17594e456fbf9857e7541effcc32488aaa33cbb->enter($__internal_09eee36950ceb71ef14c6a65b17594e456fbf9857e7541effcc32488aaa33cbb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <p><a class=\"w3-button w3-black w3-padding-32\" href=\"/book\">Go to main page</a></p>
";
        
        $__internal_09eee36950ceb71ef14c6a65b17594e456fbf9857e7541effcc32488aaa33cbb->leave($__internal_09eee36950ceb71ef14c6a65b17594e456fbf9857e7541effcc32488aaa33cbb_prof);

    }

    public function getTemplateName()
    {
        return "@AddressBook/Main/base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"::base.html.twig\" %}
{% block body %}
    <p><a class=\"w3-button w3-black w3-padding-32\" href=\"/book\">Go to main page</a></p>
{% endblock %}", "@AddressBook/Main/base.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Main/base.html.twig");
    }
}
