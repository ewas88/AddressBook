<?php

/* AddressBookBundle:Phone:add.html.twig */
class __TwigTemplate_6d6f1225432fa220a56ecb2fdf5117047ea9b0f3cc2c59a64b25cdd943089c05 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "AddressBookBundle:Phone:add.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0ca0b8e7f9513c450d12c7a245cd74587c9505a7cd454ff872d34dde8953e9b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ca0b8e7f9513c450d12c7a245cd74587c9505a7cd454ff872d34dde8953e9b2->enter($__internal_0ca0b8e7f9513c450d12c7a245cd74587c9505a7cd454ff872d34dde8953e9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AddressBookBundle:Phone:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ca0b8e7f9513c450d12c7a245cd74587c9505a7cd454ff872d34dde8953e9b2->leave($__internal_0ca0b8e7f9513c450d12c7a245cd74587c9505a7cd454ff872d34dde8953e9b2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_335ef6a49dfada7e44c807460f9274eff321d5b4d4a04ad569ae9152d111cc90 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_335ef6a49dfada7e44c807460f9274eff321d5b4d4a04ad569ae9152d111cc90->enter($__internal_335ef6a49dfada7e44c807460f9274eff321d5b4d4a04ad569ae9152d111cc90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        echo "Add new phone";
        echo " ";
        
        $__internal_335ef6a49dfada7e44c807460f9274eff321d5b4d4a04ad569ae9152d111cc90->leave($__internal_335ef6a49dfada7e44c807460f9274eff321d5b4d4a04ad569ae9152d111cc90_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c6cd06e8890836400cf74351851ad581c3a42b52cb356ae4106b87e4a8d2a5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c6cd06e8890836400cf74351851ad581c3a42b52cb356ae4106b87e4a8d2a5d->enter($__internal_9c6cd06e8890836400cf74351851ad581c3a42b52cb356ae4106b87e4a8d2a5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <h3 class=\"w3-container w3-khaki\">Add or modify phone for ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "name", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "surname", array()), "html", null, true);
        echo "</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Number:</b> <input type=\"number\" name=\"phone_number\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"cell\">Cell Phone</option>
                <option value=\"home\">Home Phone</option>
                <option value=\"work\">Work Phone</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/book/";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute(($context["person"] ?? $this->getContext($context, "person")), "id", array()), "html", null, true);
        echo "/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

";
        
        $__internal_9c6cd06e8890836400cf74351851ad581c3a42b52cb356ae4106b87e4a8d2a5d->leave($__internal_9c6cd06e8890836400cf74351851ad581c3a42b52cb356ae4106b87e4a8d2a5d_prof);

    }

    public function getTemplateName()
    {
        return "AddressBookBundle:Phone:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 24,  55 => 6,  49 => 5,  35 => 3,  11 => 1,);
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

{% block title %} {{ 'Add new phone' }} {% endblock %}

{% block body %}
    <h3 class=\"w3-container w3-khaki\">Add or modify phone for {{ person.name}} {{  person.surname}}</h3>
    <div>
    <form action=\"#\" method=\"POST\">
        <p>
            <b>Number:</b> <input type=\"number\" name=\"phone_number\" required><br>
        </p>
        <p>
            <b>Type:</b>
            <select name=\"type\">
                <option value=\"cell\">Cell Phone</option>
                <option value=\"home\">Home Phone</option>
                <option value=\"work\">Work Phone</option>
            </select>
        </p>
        <p>
            <input type=\"submit\" class=\"w3-button w3-grey w3-padding-large\" name=\"send\" value=\"Add\">
        </p>
    </form>
        <a href=\"/book/{{ person.id }}/modify\" class=\"w3-button w3-teal w3-padding-large\">Go back</a>
    </div>

{% endblock %}", "AddressBookBundle:Phone:add.html.twig", "/home/ewa/Workspace/AddressBook/src/AddressBookBundle/Resources/views/Phone/add.html.twig");
    }
}
